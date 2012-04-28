<html>
    <head>
        <title><?php echo $titulo?></title>
        <?php
            // carregando os arquivos javascript e css
            foreach ($arquivosJs as $js)
            {
                echo HTML::script($js);
            }

            foreach($arquivosCss as $css)
            {
                echo HTML::style($css);
            }
        ?>
    </head>
    <body>
        <div id="cabecalho">
            <h1>Sistema de Gerenciamento de Recursos de Infra-Estrutura</h1>
            <div id="sair"><a href="#">sair</a> </div>
        </div>
        <div id="menu">
            <?php echo $menu?>
        </div>
        <div id="pagina-atual">
            <h2><?php echo $paginaAtual; ?></h2>
        </div>
        <div id="campos">
            <ul>
                <li class="abas selected" id="abre-grid"><a href="http://localhost/sgri/recurso/grid">Grid</a></li>
                <li class="abas" id="abre-form"><a href="#">Formulário</a></li>
            </ul><br>
            <div id="formulario">
                <form>
                    <fieldset>
                        <legend><?php echo $legenda; ?></legend>
                        <?php echo $formPesquisa; ?>
                    </fieldset>
                </form>
            </div>
            <div id="tabelaResultado">
                <table class="tabelaResultado">
                    <?php echo $tabela; ?>
                </table>
            </div>
            <div id='botoes'>
                <button id="voltar" alt="Voltar"><?php echo HTML::image("files/css/images/previous.png");?></button>
                <button id="excluir-grid" alt="Excluir"><?php echo HTML::image("files/css/images/cancel.png");?></button>
                <button id="novo" alt="Novo"><?php echo HTML::image("files/css/images/new.png");?></button>
            </div>
        </div>
    </body>
</html>