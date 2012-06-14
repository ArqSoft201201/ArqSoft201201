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

    public function action_funcionario()
    {
          if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $view = View::factory("template/importacao");
        $view->set("titulo", "Importação de Funcionários");
        $this->response->body($view->render());
    }

    public function action_turma()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $view = View::factory("template/importacao");
        $view->set("titulo", "Importação de Turmas");
        $this->response->body($view->render());
    }

    public function action_upload()
    {
        try
        {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], self::UPLOAD_DIR.$_FILES["file"]["name"]))
            {
                $this->setArquivo(self::UPLOAD_DIR.$_FILES["file"]["name"]);
                $this->_carregaArquivo();
                // Verifica se o arquivo importado é usado para importação de funcionarios.
                if ((bool)$this->getXml()->FUNCIONARIO)
                {
                    $this->_importarRegistrosFuncionario();
                }
                else
                {
                    $this->_importarRegistrosTurma();
                }

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

    private function _importarRegistrosFuncionario()
    {
        $entidadeFuncionario = null;
        // Armazena todos os erros encontrados nos registros inseridos.
        $erros = array();

        // Identificador dos registros do xml. Se houver algum erro em algum dos registros inseridos, este será
        // identificado a partir deste contador.
        $i = 1;
        foreach ($this->getXml()->FUNCIONARIO as $registro) {
            // A cada novo funcionario inserido, uma nova instancia de funcionario deve ser criada.
            $entidadeFuncionario = new Model_Funcionario();
            $entidadeFuncionario->setNomfun($registro->NOMFUN);
            $entidadeFuncionario->setCodtipfun($registro->CODTIPFUN);
            $entidadeFuncionario->setEmailfun($registro->EMAILFUN);
            $entidadeFuncionario->setRgfun($registro->RGFUN);
            $entidadeFuncionario->setCpffun($registro->CPFFUN);
            $entidadeFuncionario->setNumtelfun($registro->NUMTELFUN);
            // $mensagemErro = $entidadeFuncionario->validaCadastroFuncionario();
             $mensagemErro = null;
            // Se não for encontrado nenhum erro nos cadastros inseridos para o usuario, este será salvo
            // no banco de dados.
            if (!$mensagemErro)
            {
                $entidadeFuncionario->persistir();
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

    private function _importarRegistrosTurma()
    {
        foreach ($this->getXml()->TURMA as $registro)
        {
            $codtur = Model_Turma::obterCodturPorNome($registro->NOMTUR);

            if ((bool)$codtur === false)
            {
                $entidadeFuncionario = new Model_Funcionario($registro->CODFUN);
                $entidadeHorario     = new Model_Horario($registro->CODHOR);
                $entidadeDisciplina  = Model_Disciplina::obterDisciplinaPorNome($registro->NOMDIS);
                $entidadeRecurso     = Model_Recurso::obterSalaPorNumero($registro->NUMSAL, $registro->NUMPRE);

                try
                {
                    $entidadeHorarioturma = new Model_Horarioturma();
                    $entidadeTurma = new Model_Turma();
                    $entidadeTurma->setNomtur($registro->NOMTUR);
                    $entidadeTurma->setCoddis($entidadeDisciplina->getCoddis());
                    $entidadeTurma->setCodfun($entidadeFuncionario->getCodfun());
                    $entidadeTurma->setCodsal($entidadeRecurso->getCodrec());
                    if ($entidadeTurma->validar()) {
                        $entidadeTurma->persistir();
                        $entidadeHorarioturma->setCodtur($entidadeTurma->getCodtur());
                        $entidadeHorarioturma->setCodhor($entidadeHorario->getCodhor());
                        $entidadeHorarioturma->persistir();
                    }
                }
                catch (Exception $e)
                {
                    throw new Exception($e->getMessage(), $e->getCode());
                }
            }
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