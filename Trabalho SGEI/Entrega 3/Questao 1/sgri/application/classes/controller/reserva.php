<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paulo
 * Date: 10/06/12
 * Time: 11:11
 * To change this template use File | Settings | File Templates.
 */
class Controller_Reserva extends Controller
{
    public function action_index()
    {
        $this->action_grid();
    }

    public function action_form()
    {
        $permissaoConcedida = Controller_Login::validaPermissao(
            array(
                Controller_Login::ACESSO_PROFESSOR,
                Controller_Login::ACESSO_INFRA,
                Controller_Login::ACESSO_COORDENADOR,
            )
        );
        if (!$permissaoConcedida)
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $codigo = $_GET["codigo"];
        $entidadeReserva = null;

        if ((bool)$codigo)
        {
            $entidadeReserva = new Model_Reserva($codigo);
        }
        else
        {
            $entidadeReserva = new Model_Reserva();
        }

        $arquivosJs = array(
            "files/js/jquery-ui-1.8.21.custom/js/jquery-1.7.2.min.js",
            "files/js/jquery-ui-1.8.21.custom/js/jquery-ui-1.8.21.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/ui/jquery.ui.core.js",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/ui/jquery.ui.widget.js",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/ui/jquery.ui.datepicker.js",
            "files/js/reserva.js",
            "files/js/geral.js",
        );

        $arquivosCss = array(
            "files/css/teste.css",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/themes/hot-sneaks/jquery.ui.all.css",
        );

        $entidadeHorario = new Model_Horario($entidadeReserva->getCodhor());

        $menu = View::factory("parte/menu");
        $formualario = View::factory("parte/reserva/formularioReserva");
        $formualario->set("codres", $entidadeReserva->getCodres());
        $formualario->set("codfun", Controller_Login::obterEntidadeUsuario()->getCodfun());
        $formualario->set("datini", $entidadeReserva->getDatini());
        $formualario->set("codhor", $entidadeReserva->getCodhor());
        $formualario->set("deshor", $entidadeHorario->getDiasem()." - ".
                                    $entidadeHorario->getHorini()." - ".
                                    $entidadeHorario->getHorfim());
        $formualario->set("datfim", $entidadeReserva->getDatfim());
        $formualario->set("desoco", $entidadeReserva->getDesoco());

        $view = View::factory("template/form");
        $view->set("titulo", "Gerência de Reservas");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $view->set("paginaAtual", "Gerência de Reservas");
        $view->set("menu", $menu->render());
        $view->set("legenda", "Reserva");
        $view->set("formulario", $formualario->render());

        $this->response->body($view->render());
    }

    public function action_grid()
    {
        $permissaoConcedida = Controller_Login::validaPermissao(
            array(
                Controller_Login::ACESSO_PROFESSOR,
                Controller_Login::ACESSO_INFRA,
                Controller_Login::ACESSO_COORDENADOR,
            )
        );
        if (!$permissaoConcedida)
        {
            $this->request->redirect("http://localhost/sgri/login/paginaAcessoNegado");
        }

        $codfun = $_SESSION["USUARIO"];
        $codfun = $codfun->getCodfun();
        $datini = null;
        $datfim = null;

        if (isset($_GET["datini"]))
        {
            $datini = $_GET["datini"];
        }

        if (isset($_GET["datfim"]))
        {
            $datfim = $_GET["datfim"];
        }

        $reservas = Model_Reserva::obterCorpoGrid($codfun, $datini, $datfim);

        $arquivosJs = array(
            "files/js/jquery-ui-1.8.21.custom/js/jquery-1.7.2.min.js",
            "files/js/jquery-ui-1.8.21.custom/js/jquery-ui-1.8.21.custom.min.js",
            "files/js/libraries/fancydropdown.js",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/ui/jquery.ui.core.js",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/ui/jquery.ui.widget.js",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/ui/jquery.ui.datepicker.js",
            "files/js/libraries/grid.js",
            "files/js/reserva.js",
            "files/js/geral.js",
        );

        $arquivosCss = array(
            "files/css/teste.css",
            "files/js/jquery-ui-1.8.21.custom/development-bundle/themes/hot-sneaks/jquery.ui.all.css",
        );

        $menu         = View::factory("parte/menu");
        $formPesquisa = View::factory("parte/reserva/pesquisaReserva");
        $tabela       = View::factory("parte/reserva/gridReserva");
        $tabela->set("reservas", $reservas);

        $view = View::factory("template/grid");
        $view->set("titulo", "Gerência de Reservas");
        $view->set("arquivosJs", $arquivosJs);
        $view->set("arquivosCss", $arquivosCss);
        $view->set("paginaAtual", "Gerência de Reservas");
        $view->set("menu", $menu->render());
        $view->set("legenda", "Reservas");
        $view->set("formPesquisa", $formPesquisa->render());
        $view->set("tabela", $tabela->render());

        $this->response->body($view->render());
    }

    public static function action_salvar()
    {
        $entidadeReserva = null;
        if ((bool)$_POST["codres"])
        {
            $entidadeReserva = new Model_Reserva($_POST["codres"]);
        }
        else
        {
            $entidadeReserva = new Model_Reserva();
        }

        try
        {
            $entidadeReserva->setNomeve($_POST["nomeve"]);
            $entidadeReserva->setCodtur($_POST["codtur"]);
            $entidadeReserva->setCodfun($_POST["codfun"]);
            $entidadeReserva->setCodhor($_POST["codhor"]);
            $entidadeReserva->setIdtipres($_POST["idtipres"]);
            $entidadeReserva->setDatini($_POST["datini"]);
            $entidadeReserva->setDatfim($_POST["datfim"]);
            $entidadeReserva->setCodsal($_POST["codsal"]);
            $entidadeReserva->setDesoco($_POST["desoco"]);
            $entidadeReserva->persistir();

            if ($_POST["itemres"]) {
                $itemReserva = new Model_Itemreserva();
                $itemReserva->setCodres($entidadeReserva->getCodres());
                $itemReserva->setCodrec($_POST["itemres"]);
                $itemReserva->persistir();
            }
            echo "Registro salvo com sucesso.";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function action_excluir()
    {
        $codigo = $_POST["codigo"];
        $reserva = new Model_Reserva($codigo);

        try
        {
            $reserva->remover();
            echo "Registro Excluído";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function action_obterHorarioAula()
    {
        if (isset($_POST["codtur"]))
        {
            $horariosTurma = Model_Horarioturma::obterHorariosTurmas($_POST["codtur"]);
            $opt = "";
            foreach ($horariosTurma as $horario)
            {
                $opt .= "<option value='".$horario["CODHOR"]."'>".$horario["HORARIO"]."</option>";
            }

            echo $opt;
        }
    }

    public function action_obterSala()
    {
        if (isset($_POST["codtur"]))
        {
            $salas = Model_Turma::obterSalaTurma($_POST["codtur"]);
            $opt = "";
            foreach ($salas as $sala)
            {
                $opt .= "<option value='".$sala["CODSAL"]."'>".$sala["SALA"]."</option>";
            }

            echo $opt;
        }
    }

    public function action_obterRecursosDisponiveis()
    {
        $equipamentos = Model_Recurso::obterTodosRecursosDisponíveis($_POST["datini"], $_POST["datfim"]);
        $opt = "";
        foreach ($equipamentos as $equipamento)
        {
            $opt .=  "<option value='".$equipamento["CODREC"]."'>".$equipamento["NOMREC"]."</option>";
        }

        echo $opt;
    }
}