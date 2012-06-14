<?php
/**
 * Controller do caso de uso Gerencia de Usuarios.
 * Uma observação sobre a classe usuário: Diferente de todas as demais, a Entidade de Usuário não terá o método de
 * remoção (action_excluir) implementado, pelo fato de que deve-se manter integridade de todos os elementos criados
 * por um usuário no sistema (todos os registros do sistema possuem usuário de inclusão e de alteração). Para que
 * usuários que perderam o acesso ao sistema não possam mais usar o mesmo, foi criado o campo "idusuativo", que verifi-
 * cará se este está ou não habilitado a usar o sistema.
 *
 * User: Paulo
 * Date: 23/04/12
 * Time: 17:34
 */
class Controller_Usuario extends Controller
{

    public function action_index()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $this->action_grid();
    }

    /**
     * Construção do modo de visualização em Grid do caso de uso de gerenciamento de usuário.
     */
    public function action_grid()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $login = null;

        if (isset($_GET["login"]))
        {
            $login = $_GET["login"];
        }

        $arquivosJs = array(
            "files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js",
            "files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/libraries/grid.js",
            "files/js/usuario.js",
            "files/js/geral.js",
        );
        $arquivosCss = array(
            "files/css/teste.css",
        );

        $menu         = View::factory("parte/menu");
        $formPesquisa = View::factory("parte/usuario/pesquisaUsuario");
        $tabela       = View::factory("parte/usuario/gridUsuario");
        $tabela->set("usuarios", Model_Usuario::obterCorpoGrid($login));

        $view = View::factory("template/grid");
        $view->set("titulo", "Gerência de Usuários");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $view->set("paginaAtual", "Gerência de Usuários");
        $view->set("menu", $menu);
        $view->set("legenda", "Usuários");
        $view->set("formPesquisa", $formPesquisa->render());
        $view->set("tabela", $tabela->render());

        $this->response->body($view->render());
    }

    /**
     * Construcao do modo de visualizacao em Formulario do caso de uso de gerenciamento de usuário
     */
    public function action_form()
    {
        if (!Controller_Login::validaPermissao(array(Controller_Login::ACESSO_INFRA)))
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

         $codigo = $_GET["codigo"];

        if ((bool)$codigo)
        {
            $usuarioEntidade = new Model_Usuario($codigo);
        }
        else
        {
            $usuarioEntidade = new Model_Usuario();
        }

        $arquivosJs = array(
            "files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js",
            "files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/usuario.js",
            "files/js/geral.js",
        );
        $arquivosCss = array(
            "files/css/teste.css",
        );

        $funcionarios = Model_Funcionario::obterTodosFuncionariosSemUsuario($codigo);

        $menu        = View::factory("parte/menu");
        $formualario = View::factory("parte/usuario/formularioUsuarios");
        $formualario->set("codigo", $usuarioEntidade->getCodusu());
        $formualario->set("funcionario", $funcionarios);
        $formualario->set("codfun", $usuarioEntidade->getCodfun());
        $formualario->set("login", $usuarioEntidade->getLogusu());
        if ((bool)$usuarioEntidade->getSenusu())
        {
            $formualario->set("senha", $usuarioEntidade->getSenusu());
        }
        else
        {
            $formualario->set("senha", "");
        }
        $formualario->set("status", $usuarioEntidade->getIdusuativ());
//        $formualario->set("codigo", $usuarioEntidade->getCdusuario());
//        $formualario->set("nome", $usuarioEntidade->getNmusuario());
//        $formualario->set("senha", $usuarioEntidade->getSenha());
//        $formualario->set("tipo", $usuarioEntidade->getTpusuario());
//        $formualario->set("status", $usuarioEntidade->getIdusuativo());

        $view = view::factory("template/form");
        $view->set("titulo", "Gerência de Usuários");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $view->set("paginaAtual", "Gerência de Usuários");
        $view->set("menu", $menu->render());
        $view->set("legenda", "Usuário");
        $view->set("formulario", $formualario->render());

        $this->response->body($view->render());
    }

    /**
     * Metodo de persistencia de dados.
     */
    public function action_salvar()
    {
        $codusu      = $_POST["codigo"];
        $funcionario = $_POST["funcionario"];
        $logusu      = $_POST["login"];
        $senusu      = $_POST["senha"];
        $idstuativ   = $_POST["status"];
        $confirma    = $_POST["confirmacao"];

        $entidadeUsuario = null;

        if ($codusu != null)
        {
            $entidadeUsuario = new Model_Usuario($codusu);
        }
        else
        {
            $entidadeUsuario = new Model_Usuario();
        }

        $entidadeUsuario->setLogusu($logusu);

        // Somente permite que a senha seja alterada caso a senha do campo seja diferente da senha no banco de dados.
        // Isto evita que uma senha não alterada acabe sofrendo alteração no banco, já que esta é criptografada no
        // momento da persistencia.
        if($senusu !== $entidadeUsuario->getSenusu())
        {
            $entidadeUsuario->setSenusu(sha1($senusu));
        }
        $entidadeUsuario->setCodfun($funcionario);
        $entidadeUsuario->setIdsituativ($idstuativ);

        try
        {
            $this->_validar($entidadeUsuario, $senusu, $confirma);
            $entidadeUsuario->persistir();
            echo "Registro salvo com sucesso.";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function action_excluir() {
        $codigo = $_POST["codigo"];
        $usuario = new Model_Usuario($codigo);
        try
        {
            $usuario->remover();
            echo "Registro Excluído";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Valida o usuário a ser salvo: verifica se este possui nome, tipo de usuário e senha. Verifica também se as
     * senhas digitadas coincidem. Caso todas as pré-condições sejam atendidas, este método retorna TRUE.
     *
     * @param Model_Usuario $usuario   Objeto correspondente ao usuário a ser salvo.
     * @param string        $senha     Texto do campo de senha.
     * @param string        $confSenha Texto do campo de confirmação de senha.
     * @return bool
     * @throws Exception
     */
    private function _validar(Model_Usuario $usuario, $senha, $confSenha) {
        if ($usuario->getLogusu() === null)
        {
            throw new Exception("O login do usuário deve ser informado.");
        }

        if ($usuario->getSenusu() === null)
        {
            throw new Exception("É necessário que uma senha seja cadastrada para o usuário.");
        }

        if ($usuario->getCodfun() === null)
        {
            throw new Exception("É necessário associar um funcionario ao usuário");
        }

        if ($senha != $confSenha)
        {
            throw new Exception("As senhas digitadas não coincidem.");
        }

        return true;
    }

}