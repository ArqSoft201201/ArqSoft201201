<html>
    <head>
        <title>Importa&ccedil;&atilde;o de Usu&atilde;rios</title>
        <script type="text/javascript" src="/sgri/files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="/sgri/files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="/sgri/files/js/libraries/fancydropdown.js"></script>
		<script type="text/javascript" src="/sgri/files/js/importacao.js"></script>
		<link type="text/css" href="/sgri/files/css/teste.css" rel="stylesheet" />    
	</head>
    <body>
        <div id="cabecalho">
            <h1>Sistema de Gerenciamento de Recursos de Infra-Estrutura</h1>
            <div id="sair">
				<a href="#">Sair</a> 
			</div>
        </div>
        <div id="menu">
            <ul class="tabs">
                <li class="hasmore"><a href="#"><span>Cadastrar</span></a>
                <ul class="dropdown">
                    <li><a href="http://localhost/sgri/usuario/grid">Usu&aacute;rio</a></li>
                    <li><a href="http://localhost/sgri/recurso/grid">Recurso</a></li>
                    <li><a href="formDisc.html">Disciplina</a></li>
                </ul>
                <li class="hasmore"><a href="importar.html"><span>Importar</span></a>
                <li class="hasmore"><a href="reserva.html"><span>Reservar</span></a>
                <li class="hasmore"><a href="relatorio.html"><span>Relat&oacute;rio</span></a>
            </ul>
        </div>
        <br><br>
        <div id="pagina-atual">
            <h2>Importa&ccedil;&atilde;o de Usu&aacute;rios</h2>
        </div>
        <div id="campos">
            <fieldset>
                <legend>Importa&ccedil;&atilde;o de Usu&aacute;rios</legend>
                <form action="http://localhost/sgri/importacao/upload" method="post" enctype="multipart/form-data">
                    <label for="file">Arquivo (xml):</label>
                    <input type="file" name="file" id="file" /><br>
                    <input type="submit" name="submit" id="enviar" value="Enviar" />
                </form>
            </fieldset>
        </div>
    </body>
</html>