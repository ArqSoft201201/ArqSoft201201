<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paulo
 * Date: 06/05/12
 * Time: 18:29
 * To change this template use File | Settings | File Templates.
 */
class Controller_Login extends Controller
{
    const ACESSO_INFRA       = 1;
    const ACESSO_PROFESSOR   = 2;
    const ACESSO_COORDENADOR = 3;

    public function action_index()
    {
        $arquivosJs = array(
            "files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js",
            "files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/libraries/grid.js",
            "files/js/login.js",
        );

        $arquivosCss = array(
            "files/css/teste.css",
        );

        $view = View::factory("template/login");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $this->response->body($view->render());
    }

    public function action_log()
    {
        if (!isset($_SESSION))
        {
            session_start();
        }

        $nome  = $_POST["nome"];
        $senha = $_POST["senha"];

        $usuario = new Model_Usuario();
        $codigoUsuario = $usuario->obterUsuarioLogin($nome, $senha);
        if ((bool)$codigoUsuario)
        {
            $usuario = new Model_Usuario($codigoUsuario);
            $_SESSION["USUARIO"] = $usuario;
            // Este pode ser direcionado para outra página.
            $this->request->redirect("http://localhost/sgri/recurso/grid");
        }
        else
        {
            echo "Usuário ou senha inválidos.";
        }
    }

    public function action_paginaAcessoNegado()
    {
        $this->response->body("Acesso negado.");
    }

    public static function validaPermissao(array $permissoes)
    {
        if (!isset($_SESSION))
        {
            session_start();
        }

        $usuario = $_SESSION["USUARIO"];
        if ((bool)$usuario)
        {
            return in_array($usuario->getTpusuario(), $permissoes);
        }
    }
}