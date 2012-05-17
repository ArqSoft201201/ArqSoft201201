<?php
/**
 * Controller do caso de uso de Gerenciar Equipamentos.
 *
 * User: Paulo
 * Date: 07/04/12
 * Time: 00:25
 */
class Controller_Recurso extends Controller
{
	/**
	 * Redireciona para a tela de Gerência de de Recursos, quando o usuário acessa a url "http://localhost/sgri"
	 */
	public function action_index() {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

		$this->action_grid();
	}

    /**
	 * Construção do modo de visualização em grid do caso de uso de Gerenciamento de Recursos.
	 *
	 */
    public function action_grid()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $tipo = null;
        $nome = null;
        if (isset($_GET["tipo"]))
        {
            $tipo = $_GET["tipo"];
        }

        if (isset($_GET["nome"]))
        {
            $nome = $_GET["nome"];
        }

        $recursoEntity = new Model_Recurso();
        $recursos = $recursoEntity->obterCorpoGrid($nome, $tipo);

        $arquivosJs = array(
            "files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js",
            "files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/libraries/grid.js",
            "files/js/recurso.js",
        );

        $arquivosCss = array(
            "files/css/teste.css",
        );

        $menu = View::factory("parte/menu");
        $formPesquisa = View::factory("parte/recurso/pesquisaRecurso");
        $tabela       = View::factory("parte/recurso/gridRecurso");
        $tabela->set("recursos", $recursos);

        $view = View::factory("template/grid");
        $view->set("titulo", "Gerência de Recursos");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $view->set("paginaAtual", "Gerência de Recursos");
        $view->set("menu", $menu->render());
        $view->set("legenda", "Recursos");
        $view->set("formPesquisa", $formPesquisa->render());
        $view->set("tabela", $tabela->render());

        $this->response->body($view->render());
    }

    /**
     * Construcao do modo de visualização em formulário do caso de uso de Gerenciamento de Recursos.
     */
    public function action_form()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
             $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $codigo = $_GET["codigo"];

        if ($codigo != 0)
        {
            $recursoEntidade = new Model_Recurso($codigo);
        }
        else
        {
            $recursoEntidade = new Model_Recurso();
        }

        $arquivosJs = array(
            "files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js",
            "files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/recurso.js",
        );
        $arquivosCss = array(
            "files/css/teste.css",
        );

        $menu        = View::factory("parte/menu");
        $formualario = View::factory("parte/recurso/formularioRecursos");
        $formualario->set("codigo", $recursoEntidade->getCdrecurso());
        $formualario->set("nome", $recursoEntidade->getDsrecurso());
        $formualario->set("marca", $recursoEntidade->getDsmarcarec());
        $formualario->set("sala", $recursoEntidade->getNrsala());
        $formualario->set("predio", $recursoEntidade->getNrpredio());
        $formualario->set("informacoes", $recursoEntidade->getDsatribrec());
        $formualario->set("tipo", $recursoEntidade->getTprecurso());

        $view = View::factory("template/form");
        $view->set("titulo", "Gerência de Recursos");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $view->set("paginaAtual", "Gerência de Recursos");
        $view->set("menu", $menu->render());
        $view->set("legenda", "Recursos");
        $view->set("formulario", $formualario->render());

        $this->response->body($view->render());
    }

    /**
     * Metodo usado para persistencia de dados do gerenciamento de recursos.
     */
    public function action_salvar()
    {
        $codigo      = $_POST["codigo"];
        $nome        = $_POST["nome"];
        $marca       = $_POST["marca"];
        $sala        = $_POST["sala"];
        $predio      = $_POST["predio"];
        $informacoes = $_POST["informacoes"];
        $tipo        = $_POST["tipo"];

        if ($codigo != null)
        {
            $entidadeRecurso = new Model_Recurso($codigo);
        }
        else
        {
            $entidadeRecurso = new Model_Recurso();
        }

        $entidadeRecurso->setDsrecurso($nome);
        $entidadeRecurso->setDsmarcarec($marca);
        $entidadeRecurso->setNrsala($sala);
        $entidadeRecurso->setNrpredio($predio);
        $entidadeRecurso->setDsatribrec($informacoes);
        $entidadeRecurso->setTprecurso($tipo);
        try
        {
            $this->_validar($entidadeRecurso);
            $entidadeRecurso->persistir();
            echo "Registro Salvo com sucesso.";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Metodo de remoção de dados do gerenciamento de recursos.
     */
    public function action_excluir()
    {
        $codigo = $_POST["codigo"];
        $recurso = new Model_Recurso($codigo);
        try
        {
            $recurso->remover();
            echo "Registro Excluído";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Valida o objeto a ser salvo.
     *
     * @param Model_Recurso $recurso
     *
     * @throws Exception
     */
    private function _validar(Model_Recurso $recurso)
    {
        if ($recurso->getDsrecurso() == null)
        {
            throw new Exception("Campo nome Requerido.");
        }
    }

}