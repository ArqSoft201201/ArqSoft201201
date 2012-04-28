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
                <li class="abas" id="abre-grid"><a href="http://localhost/sgri/recurso/grid">Grid</a></li>
                <li class="abas selected" id="abre-form"><a href="#">Formulário</a></li>
            </ul><br>
            <form>
                <fieldset>
                    <legend><?php echo $legenda; ?></legend>
                    <?php echo $formulario; ?>
                </fieldset>
                <div id='botoes'>
					<!-- Por um motivo ainda não encontrado, o Framework cria alguma incompatibilidade com a inserção de imagens nos botoes abaixo, fazendo com que este 
					     interfira na variavel global "GET" do php. Abaixo dos botoes ativos no momento, está o código dos botões com as respectivas imagens -->
                    <input type="button" value="Voltar" id="voltar">
					<input type="button" value="Excluir" id="excluir-form">
					<input type="button" value="Salvar" id="salvar-form">
					<input type="button" value="Novo" id="novo">
					
					<!-- Teste 1: Utilizando a biblioteca HTML do framework-->
					<!--<button id="voltar" alt="Voltar"><?php //echo HTML::image("files/css/images/previous.png");?></button>
                    <button id="excluir-form" alt="Excluir"><?php //echo HTML::image("files/css/images/cancel.png");?></button>
                    <button id="salvar-form" alt="Salvar"><?php //echo HTML::image("files/css/images/save.png");?></button>
                    <button id="novo" alt="Novo"><?php //echo HTML::image("files/css/images/new.png");?></button>-->
					
					<!-- Teste 2: inserindo manualmete as imagens -->
					<!--<button id="voltar" alt="Voltar"><img src="/sgri/files/css/images/previous.png"></button>
                    <button id="excluir-form" alt="Excluir"><img src="/sgri/files/css/images/cancel.png"></button>
                    <button id="salvar-form" alt="Salvar"><img src="/sgri/files/css/images/save.png"></button>
                    <button id="novo" alt="Novo"><img src="/sgri/files/css/images/new.png"></button>-->
                </div>
            </form>
        </div>
    </body>
</html>