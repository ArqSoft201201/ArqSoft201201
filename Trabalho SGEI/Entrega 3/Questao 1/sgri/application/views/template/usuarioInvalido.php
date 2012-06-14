<html>
    <head></head>
    <body>
        <?php
        if ($permissaoNegada)
        {
            echo "<h2>Acesso Negado</h2>";
        }
        else
        {
            echo "<h2>Usu&aacute;rio ou senha inválido</h2>";
        }
        ?>
        <button onclick="window.location = 'http://localhost/sgri'">voltar ao login</button>
    </body>
</html>