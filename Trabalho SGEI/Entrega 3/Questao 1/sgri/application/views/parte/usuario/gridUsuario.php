<tr class="header">
    <th>C&oacute;digo</th>
    <th>Login</th>
    <th>Funcion&aacute;rio</th>
    <th>Ativo</th>
    <?php
    for ($i = 0; $i < count($usuarios); $i++)
    {
        if ($i % 2 === 0)
        {
            echo "<tr class='odd'>";
        }
        else {
            echo "<tr>";
        }

        echo "        <td class='codusu'>".$usuarios[$i]["CODUSU"]."</td>
                      <td class='nomusu'>".$usuarios[$i]["LOGUSU"]."</td>
                      <td class='nomfun'>".$usuarios[$i]["NOMFUN"]."</td>
                      <td class='idsituativ'>".$usuarios[$i]["IDSITUATIV"]."</td>
                  </tr>";
    }
    ?>
</tr>