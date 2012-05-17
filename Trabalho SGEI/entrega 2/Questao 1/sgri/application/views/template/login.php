<html>
    <head>
        <title>Login - SGRI</title>
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
        </div>
		<form name="form-login" id="form-login" method="POST" action="http://localhost/sgri/login/log">
			<fieldset id="bloco-login">
                <legend>Login</legend>
                <div id="campos-login">
                    <label for="usu" class="rotulo">Usu&aacute;rio</label>
                    <input type="text" id="usu" name="nome" class="entrada">
                    <br>
                    <label for="pass" class="rotulo">Senha</label>
                    <input type="password" id="pass" name="senha" class="entrada"><br>
                    <input type="submit" value="Entrar" id="entrar" alt="Entrar" title="Entrar">
                </div>
			</fieldset>
		</form>
		<!--<div id="botoes">-->
        <!--<input type="button" value="Entrar" id="entrar" alt="Entrar" title="Entrar">-->
		<!--</div>-->
	</body>