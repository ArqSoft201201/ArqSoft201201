<?php
include("usuario.php");

/**
 * Controller do caso de uso de importacao de usuarios.
 *
 * Esta classe fará a importação de professores via arquivo XML, desde que este seja um arquivo válido e que possua
 * todos os campos necessários para inserção de um funcionário, conforme as restrições impostas no banco de dados.
 */
class Controller_importacao extends Controller
{
    // Diretorio para upload de arquivos.
    const UPLOAD_DIR = "files/upload/temp/";

    /**
     * Variavel que armazenara o objeto XML.
     *
     * @var SimpleXMLElement
     */
    private $_xml;
    /**
     * Arquivo XML carregado.
     *
     * @var
     */
    private $_arquivo;

    public function action_index()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $this->response->body(View::factory("template/importacao")->render());
    }

    public function action_upload()
    {
        try
        {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], self::UPLOAD_DIR.$_FILES["file"]["name"]))
            {
                $this->setArquivo(self::UPLOAD_DIR.$_FILES["file"]["name"]);
                $this->_carregaArquivo();
                $this->_importarRegistros();
                $this->request->redirect("http://localhost/sgri/usuario");
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Inicializa a variavel xml, o arquivo do upload seja um arquivo xml valido.
     *
     * @Exception
     */
    private function _carregaArquivo()
    {
        try
        {
            if (file_exists($this->getArquivo()))
            {
                $xml = simplexml_load_file($this->getArquivo());
                $this->setXml($xml);
            }
            else
            {
                throw new Exception("Arquivo não encontrado.");
            }
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    private function _importarRegistros()
    {
        $entidadeUsuario = null;
        // Armazenará todos os erros encontrados nos registros inseridos.
        $erros           = array();

        // Identificador dos registros do xml. Se houver algum erro em algum dos registros inseridos, este será
        // identificado a partir deste contador.
        $i = 1;
        foreach ($this->getXml()->USUARIO as $registro)
        {
            // A cada novo usuario inserido, uma nova instancia de usuario deve ser criada.
            $entidadeUsuario = new Model_Usuario();
            $entidadeUsuario->setNmusuario($registro->NOME);
            $entidadeUsuario->setSenha(sha1($registro->SENHA));
            $entidadeUsuario->setTpusuario($registro->TIPO);
            $entidadeUsuario->setIdusuativo('A');
            $mensagemErro = $entidadeUsuario->validaCadastroUsuario();
            // Se não for encontrado nenhum erro nos cadastros inseridos para o usuario, este será salvo
            // no banco de dados.
            if (!$mensagemErro)
            {
                $entidadeUsuario->persistir();
            }
            else
            {
                $erros[] = "Erro no registro n. $i: " . $mensagemErro;
            }
            $i++;
        }

        if (!empty($erros))
        {
            return $erros;
        }
    }

    /**
     * Metodo Setter do atributo Arquivo
     *
     * @param  $arquivo
     */
    public function setArquivo($arquivo)
    {
        $this->_arquivo = $arquivo;
    }

    /**
     * Metodo Getter do atributo Arquivo
     *
     * @return
     */
    public function getArquivo()
    {
        return $this->_arquivo;
    }

    /**
     * Metodo Setter do atributo Xml
     *
     * @param \SimpleXMLElement $xml
     */
    public function setXml($xml)
    {
        $this->_xml = $xml;
    }

    /**
     * Metodo Getter do atributo Xml
     *
     * @return \SimpleXMLElement
     */
    public function getXml()
    {
        return $this->_xml;
    }


}