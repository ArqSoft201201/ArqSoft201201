<?php
include("driver/driverfactory.php");
include("config/database.php");
/**
 * Esta classe define as operações que podem ser efetuadas com o banco de dados. Ela é implementada seguindo o padrão
 * singleton, o que faz com que o projeto trabalhe somente com uma instancia do banco de dados.
 *
 * @author Paulo Henrique
 *
 * @data   03 de abril de 2012
 */
class Statement
{
    /**
     * driver usado nas conexões da classe.
     * @var Driver
     */
    private $_driver;
    private $_connection;
    /**
     * @var Statement
     */
    private static $_instance;

    /**
     *    Metodo construtor da classe. Inicializa o atributo de Driver com os dados  de nome de usuario, senha, host e
     * nome do banco de dados (no caso do banco Oracle, DBNAME é usado para o SID do mesmo). O driver usado pela classe,
     * assim como os dados de identificação do banco de dados são incializados no arquivo de configuracao.
     *    O método construtor desta classe é privado, para que possa ser implementado o padrao singleton.
     */
    private function __construct()
    {
        $driver = DriverFactory::factory(Config::USERNAME, Config::PASSWORD, Config::HOST, Config::DBNAME);
        $this->setDriver($driver);
        $this->setConnection($driver->getConnection());
    }

    /**
     * Método estático, que retorna uma instância da classe. Qualquer metodo implementado nesta classe somete será
     * acessível através deste método.
     *
     * @static
     *
     * @return Statement
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new Statement();
        }
        return self::$_instance;
    }

    /**
     * Implementa o metodo beginTransaction do banco de dados.
     *
     * @throws Exception
     */
    public function beginTransaction()
    {
        try {
            $this->getConnection()->beginTransaction();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Implementa o metodo commit do banco de dados.
     *
     * @throws Exception
     */
    public function commit()
    {
        try {
            $this->getConnection()->commit();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Implementa o metodo commit do banco de dados.
     *
     * @throws Exception
     */
    public function rollback()
    {
        try {
            $this->getConnection()->rollBack();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Coloca aspas nas queries.
     *
     * @param string $sql Query que deverá ser tratada.
     *
     * @return string Query com todos os tratamentos feitos.
     *
     * @throws Exception
     */
    public function quote($sql)
    {
        try {
            return $this->getConnection()->quote($sql);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Metodo de retorno de resultados de uma sentenca SQL, onde todos os valores serao retornados em um array, onde
     * cada indice numérico do array é uma linha do retorno do select, e todos os campos serao identificados com um
     * indice associativo com o mesmo nome da consulta. ex.:
     * [0] => array (
     *      "coluna_1" => "valor 1",
     *      "coluna_2"=>"valor 2"
     * )
     *
     * @param string $sql Sentença sql contendo a consulta.
     *
     * @return array Retorno da consulta.
     *
     * @throws Exception
     */
    public function fetchAll($sql)
    {
        try {
            $stmt = $this->getConnection()->prepare($sql);
            if (!$stmt->execute()) {
                $error = $stmt->errorInfo();
                throw new Exception($error[2], $error[1]);
            }
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna todos os dados de uma coluna da consulta sql. O metodo, por padrao retorna a primeira coluna de uma
     * consulta, mas a coluna pode ser parametrizada.
     *
     * @param string $sql   Sentença SQL.
     * @param int    $index Indice de retorno. Por padrão, é a primeira coluna da consulta.
     *
     * @return array
     *
     * @throws Exception
     */
    public function fetchCol($sql, $index = 0)
    {
        try {
            $stmt = $this->getConnection()->prepare($sql);
            if (!$stmt->execute()) {
                $error = $stmt->errorInfo();
                throw new Exception($error[2], $error[1]);
            }
            return $stmt->fetchAll(PDO::FETCH_COLUMN, $index);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna a primeira linha de uma consulta SQL.
     *
     * @param string $sql Sentença SQL.
     *
     * @return array
     *
     * @throws Exception
     */
    public function fetchRow($sql)
    {
        try {
            $row = $this->fetchAll($sql);
            return (empty($row)) ? null : $row[0];
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna o primeiro registro da primeira linha do resultado de um select.
     *
     * @param string $sql Sentença SQL.
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function fetchOne($sql)
    {
        try {
            $stmt = $this->getConnection()->prepare($sql);
            if (!$stmt->execute()) {
                $error = $stmt->errorInfo();
                throw new Exception($error[2], $error[1]);
            }
            return $stmt->fetchColumn();
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }


    public function execute($sql)
    {
        try
        {
            $stmt = $this->getConnection()->prepare($sql);
            $result = $stmt->execute();
            if (!$result) {
                $error = $stmt->errorInfo();
                throw new Exception($error[2], $error[1]);
            }

            return $result;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Conta o número de linhas retornadas pela consulta.
     *
     * @param string $sql Sentença SQL
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function rowCount($sql)
    {
        $sql = "select count(1) from ($sql)";
        try {
            return $this->fetchOne($sql);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Retorna o numero de colunas retornadas pela consulta.
     *
     * @param string $sql Sentença sql.
     *
     * @return int quantidade de linhas.
     *
     * @throws Exception
     */
    public function colCount($sql)
    {
        $stmt = $this->getConnection()->prepare($sql);
        if (!$stmt->execute()) {
            $error = $stmt->errorInfo();
            throw new Exception($error[2], $error[1]);
        }
        return $stmt->columnCount();
    }

    /**
     * Retorna um array contendo os meta dados da coluna.
     *
     * @param string $column Nome da coluna
     *
     * @return int
     */
    public function getColumnMeta($column)
    {
        return $this->getConnection()->query($column)->columnCount();
    }

    /**
     * Setter do atributo de connection.
     *
     * @param PDO $connection
     */
    protected function setConnection(PDO $connection)
    {
        $this->_connection = $connection;
    }

    /**
     * Metodo getter para connection.
     *
     * @return PDO
     */
    protected function getConnection()
    {
        return $this->_connection;
    }

    /**
     * Metodo setter para driver.
     *
     * @param Driver $driver
     */
    protected function setDriver(Driver $driver)
    {
        $this->_driver = $driver;
    }

    /**
     * Metodo getter para driver.
     *
     * @return Driver
     */
    protected function getDriver()
    {
        return $this->_driver;
    }
	
}