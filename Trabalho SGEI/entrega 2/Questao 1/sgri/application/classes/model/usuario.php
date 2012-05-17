<?php
include("statement/statement.php");
include("statement/util.php");

/**
 * Classe que representa a entidade Usuario. Aqui, serão implementados os métodos de persistência, exclusão, getters
 * e setters dos atributos, além de consultas relacionadas à entidade.
 * Usuarios deste sistema são todos aqueles que possuem acesso ao mesmo, mesmo em diferentes níveis de acesso. São eles:
 * Funcionarios do setor de infra-estrutura, professores e coordenadores.
 *
 * @author Paulo Henrique
 *
 * Date: 14/04/12
 */
class Model_Usuario
{
    /**
     * Codigo do usuario.
     *
     * @var
     */
    private $_cdusuario;
    /**
     * Nome do usuario.
     *
     * @var
     */
    private $_nmusuario;
    /**
     * Senha do usuario.
     *
     * @var
     */
    private $_senha;
    /**
     * Tipo de usuario. Este pode ser Funcionario do setor de infra, Professor ou coordenador.
     *
     * @var
     */
    private $_tpusuario;
    /**
     * Data de inclusao.
     *
     * @var
     */
    private $_dtinclusao;
    /**
     * Id de usuário ativo.
     *
     * @var
     */
    private $_idusuativo;
    /**
     * Data de atualizacao.
     *
     * @var
     */
    private $_dtatualizacao;
    /**
     * Operador de inclusao.
     *
     * @var
     */
    private $_cdoperinclusao;
    /**
     * Operador de atualizacao.
     *
     * @var
     */
    private $_cdoperatualizacao;

    // Tipos de usuario aceitos no sistema.
    const INFRA       = 1;
    const PROFESSOR   = 2;
    const COORDENADOR = 3;


    /**
     * Metodo construtor da classe. Este permite duas construções: A primeira, onde o paramentro de codigo de usuario
     * recebe um codigo valido, cria um objeto com um registro já existente no banco de dados, a fim de atualizar os
     * dados do mesmo. No segundo caso, onde o codigo não é passado, o objeto poderá ser usado para salvar um novo
     * registro no banco de dados, ou retornar consultas SQL.
     *
     * @param null $cdusuario
     */
    public function __construct($cdusuario = null)
    {
        $this->_obterEntidade($cdusuario);
    }

    public function validaCadastroUsuario()
    {
        $mensagemErro = null;
        // Verifica se todos os campos foram preenchidos.
        if ($this->getNmusuario() == "")
        {
            $mensagemErro = "O nome do usuário não foi informado.";
        }
        else if ($this->getSenha() == "")
        {
            $mensagemErro = "A senha do usuário deve ser informada.";
        }
        else if ($this->getTpusuario() == "")
        {
            $mensagemErro = "O tipo de usuário deve ser informado.";
        }
        // Verifica se o tipo informado de usuário é um tipo válido.
        else if ($this->getTpusuario() != self::INFRA     &&
            $this->getTpusuario() != self::PROFESSOR &&
            $this->getTpusuario() != self::COORDENADOR)
        {
            $mensagemErro = "O tipo de usuário informado não é valido.";
        }

        return $mensagemErro;
    }

    /**
     * Metodo usado para persistencia
     *
     * @return int
     * @throws Exception
     */
    public function persistir()
    {
        try {
            if ($this->getCdusuario() === null)
            {
                return $this->_insert();
            }
            else
            {
                return $this->_update();
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function remover()
    {
        $sql = "DELETE FROM USUARIO WHERE CDUSUARIO = ".$this->getCdusuario();
        Statement::getInstance()->execute($sql);
    }

    public function obterUsuarioLogin($nmusuario, $senha)
    {
        $sql = "SELECT CDUSUARIO
                FROM USUARIO
                WHERE
                    NMUSUARIO = '$nmusuario' AND
                    SENHA = '".sha1($senha)."'";
        return Statement::getInstance()->fetchOne($sql);
    }

    /**
     * Metodo setter do atributo cdoperatualizacao.
     *
     * @param $cdoperatualizacao
     */
    public function setCdoperatualizacao($cdoperatualizacao)
    {
        $this->_cdoperatualizacao = $cdoperatualizacao;
    }

    /**
     * Metodo getter do atributo cdoperatualizacao.
     *
     * @return string
     */
    public function getCdoperatualizacao()
    {
        return $this->_cdoperatualizacao;
    }

    /**
     * Metodo setter do atributo cdoperinclusao.
     *
     * @param $cdoperinclusao
     */
    public function setCdoperinclusao($cdoperinclusao)
    {
        $this->_cdoperinclusao = $cdoperinclusao;
    }

    /**
     * Metodo getter do atributo cdoperinclusao.
     *
     * @return integer
     */
    public function getCdoperinclusao()
    {
        return $this->_cdoperinclusao;
    }

    /**
     * Metodo setter do atributo cdusuario.
     *
     * @param $cdusuario
     */
    public function setCdusuario($cdusuario)
    {
        $this->_cdusuario = $cdusuario;
    }

    /**
     * Metodo getter do atributo cdusuario.
     *
     * @return integer
     */
    public function getCdusuario()
    {
        return $this->_cdusuario;
    }

    /**
     * Metodo setter do atributo dtatualizacao.
     *
     * @param $dtatualizacao
     */
    public function setDtatualizacao($dtatualizacao)
    {
        $this->_dtatualizacao = $dtatualizacao;
    }

    /**
     * Metodo getter do atributo dtatualizacao.
     *
     * @return string
     */
    public function getDtatualizacao()
    {
        return $this->_dtatualizacao;
    }

    /**
     * Metodo setter do atributo idusuativo.
     *
     * @param $idusuativo
     */
    public function setIdusuativo($idusuativo)
    {
        $this->_idusuativo = $idusuativo;
    }

    /**
     * Metodo getter do atributo idusuativo.
     *
     * @return string
     */
    public function getIdusuativo()
    {
        return $this->_idusuativo;
    }

    /**
     * Metodo setter do atributo dtinclusao.
     *
     * @param $dtinclusao
     */
    public function setDtinclusao($dtinclusao)
    {
        $this->_dtinclusao = $dtinclusao;
    }

    /**
     * Metodo getter do atributo dtinclusao.
     *
     * @return string
     */
    public function getDtinclusao()
    {
        return $this->_dtinclusao;
    }

    /**
     * Metodo setter do atributo nmusuario.
     *
     * @param $nmusuario
     */
    public function setNmusuario($nmusuario)
    {
        $this->_nmusuario = $nmusuario;
    }

    /**
     * Metodo getter do atributo nmusuario.
     *
     * @return mixed
     */
    public function getNmusuario()
    {
        return $this->_nmusuario;
    }

    /**
     * Metodo setter do atributo senha.
     *
     * @param $senha
     */
    public function setSenha($senha)
    {
        $this->_senha = $senha;
    }

    /**
     * Metodo getter do atributo senha.
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->_senha;
    }

    /**
     * Metodo setter do atributo tpusuario.
     *
     * @param $tpusuario
     */
    public function setTpusuario($tpusuario)
    {
        $this->_tpusuario = $tpusuario;
    }

    /**
     * Metodo getter do atributo tpusuario.
     *
     * @return integer
     */
    public function getTpusuario()
    {
        return $this->_tpusuario;
    }

    /**
     * Retorna o resultado da query que será usada para formação da tela de visualização em Grid. Este retornará todos
     * os dados existentes na tabela, a menos que estes sejam filtrados.
     *
     * @param string  $nmusuario Nome do usuario pesquisado.
     * @param integer $tpusuario Tipo do usuario pesquisado.
     *
     * @return array
     */
    public function obterCorpoGrid($nmusuario = null, $tpusuario = null)
    {
        $sql = "SELECT
                    U.CDUSUARIO,
                    U.NMUSUARIO,
                    T.NMTPUSU,
                    CASE WHEN IDUSUATIVO = 'A'
                        THEN 'ATIVO'
                        ELSE 'INATIVO'
                    END AS IDUSUATIVO,
                    U.DTINCLUSAO,
                    U.DTATUALIZACAO,
                    U.CDOPERINCLUSAO,
                    U.CDOPERATUALIZACAO
                FROM
                    USUARIO U,
                    TIPOUSUARIO T
                WHERE
                    U.TPUSUARIO = T.CDTPUSU";

        if ((bool)$nmusuario)
        {
            $sql .= " AND upper(U.NMUSUARIO) like upper('%$nmusuario%')";
        }

        if ((bool)$tpusuario)
        {
            $sql .= " AND U.TPUSUARIO = $tpusuario";
        }

        $sql .= " ORDER BY U.CDUSUARIO";

        try
        {
            return Statement::getInstance()->fetchAll($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Metodo auxiliar do metodo principal persistir, que será usado sempre que a entidade persisida se
     * tratar de um novo usuario cadastrado.
     *
     * @return int
     *
     * @throws Exception
     */
    private function _insert()
    {
        if ($this->getCdusuario() === null)
        {
            $this->setCdusuario(Util::obterProximaChave("USUARIO", "CDUSUARIO"));
        }

        $sql = "INSERT INTO USUARIO
                VALUES(
                    " . $this->getCdusuario() . ",
                    '" . $this->getNmusuario() . "',
                    '" . $this->getSenha() . "',
                    " . $this->getTpusuario() . ",
                    '".$this->getIdusuativo()."',
                    SYSDATE,
                    SYSDATE,
                    1,
                    1
                )";
        //                    CDOPERINCLUSAO    = " . $this->getCdoperinclusao() . ",
        //                    CDOPERATUALIZACAO = " . $this->getCdoperatualizacao() . "

        try
        {
            return Statement::getInstance()->execute($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Metodo auxiliar do metodo principal de persistir. Este sempre será chamado quando se tratar de persistência
     * de um recurso já cadastrado e houve somente uma atualização.
     *
     * @return int
     * @throws Exception
     */
    private function _update()
    {
        $sql = "UPDATE USUARIO
                SET
                    NMUSUARIO         = '" . $this->getNmusuario() . "',
                    TPUSUARIO         = " . $this->getTpusuario() . ",
                    SENHA             = '" . $this->getSenha() . "',
                    IDUSUATIVO        = '".$this->getIdusuativo()."',
                    DTATUALIZACAO     = SYSDATE,
                    CDOPERATUALIZACAO = 1
                WHERE CDUSUARIO = ".$this->getCdusuario();
        //                    CDOPERINCLUSAO    = " . $this->getCdoperinclusao() . ",
        //                    CDOPERATUALIZACAO = " . $this->getCdoperatualizacao() .
        try
        {
            return Statement::getInstance()->execute($sql);
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    private function _obterEntidade($cdusuario)
    {
        $result = null;
        if ($cdusuario !== null)
        {
            $sql    = "SELECT * FROM USUARIO WHERE CDUSUARIO = $cdusuario";
            $result = Statement::getInstance()->fetchRow($sql);

            if ($result)
            {
                try
                {
                    $this->setCdusuario($result["CDUSUARIO"]);
                    $this->setNmusuario($result["NMUSUARIO"]);
                    $this->setSenha($result["SENHA"]);
                    $this->setTpusuario($result["TPUSUARIO"]);
                    $this->setIdusuativo($result["IDUSUATIVO"]);
                    $this->setDtinclusao($result["DTINCLUSAO"]);
                    $this->setDtatualizacao($result["DTATUALIZACAO"]);
                    $this->setCdoperinclusao($result["CDOPERINCLUSAO"]);
                    $this->setCdoperatualizacao($result["CDOPERATUALIZACAO"]);
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
        }

        return $this;
    }

}