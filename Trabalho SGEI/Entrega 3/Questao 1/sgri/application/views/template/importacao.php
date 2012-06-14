<html>
    <head>
        <title><?php echo $titulo ?></title>
        <script type="text/javascript" src="/sgri/files/js/jquery-ui-1.8.18.custom/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="/sgri/files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="/sgri/files/js/libraries/fancydropdown.js"></script>
		<script type="text/javascript" src="/sgri/files/js/importacao.js"></script>
        <script type="text/javascript" src="/sgri/files/js/geral.js"></script>
		<link type="text/css" href="/sgri/files/css/teste.css" rel="stylesheet" />    
	</head>
    <body>
        <div id="cabecalho">
            <h1>Sistema de Gerenciamento de Recursos de Infra-Estrutura</h1>
            <div id="sair">
				<a href="#">Sair</a> 
			</div>
        </div>
        <!-- Este menu será usado por todas as telas do sistema.-->
        <div id="menu">
            <ul class="tabs">
                <li class="hasmore"><a href="#"><span>Cadastrar</span></a>
                    <ul class="dropdown">
                        <li><a href="http://localhost/sgri/usuario/grid">Usuário</a></li>
                        <li><a href="http://localhost/sgri/recurso/grid">Recurso</a></li>
                    </ul>
                <li class="hasmore"><a href="#"><span>Importar</span></a>
                    <ul class="dropdown">
                        <li><a href="http://localhost/sgri/importacao/funcionario">Funcionário</a></li>
                        <li><a href="http://localhost/sgri/importacao/turma">Turma</a></li>
                    </ul>
                <li class="hasmore"><a href="#"><span>Reservar</span></a>
                    <ul class="dropdown">
                        <li><a href="http://localhost/sgri/reserva/grid">Reserva para aulas</a></li>
<!--                        <li><a href="">Reserva para eventos</a></li>-->
                    </ul>
                <li class="hasmore"><a href="relatorio.html"><span>Relatório</span></a>
            </ul>
        </div>

        <br><br>
        <div id="pagina-atual">
            <h2><?php echo $titulo ?></h2>
        </div>
        <div id="campos">
            <fieldset>
                <legend><?php echo $titulo ?></legend>
                <form action="http://localhost/sgri/importacao/upload" method="post" enctype="multipart/form-data">
                    <label for="file">Arquivo (xml):</label>
                    <input type="file" name="file" id="file" /><br>
                    <input type="submit" name="submit" id="enviar" value="Enviar" />
                </form>
            </fieldset>
        </div>
    </body>
</html>