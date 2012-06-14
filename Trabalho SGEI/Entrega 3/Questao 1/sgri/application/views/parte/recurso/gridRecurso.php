<tr class="header">
    <th>C&oacute;digo</th>
    <th>Nome</th>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Descri&ccedil;&atilde;o</th>
    <th>Sala</th>
    <th>Pr&eacute;dio</th>
    <?php
        for ($i = 0; $i < count($recursos); $i++)
        {
            if ($i % 2 === 0)
            {
                echo "<tr class='odd'>";
            }
            else {
                echo "<tr>";
            }

            echo "    <td class='codigo'>".$recursos[$i]["CODREC"]."</td>
                      <td class='nome'>".$recursos[$i]["NOMREC"]."</td>
                      <td class='tipo'>".(($recursos[$i]["IDTIPREC"] == "E") ? "Equipamento" : "Ambiente")."</td>
                      <td class='marca'>".$recursos[$i]["NOMMARREC"]."</td>
                      <td class='informacoes'>".utf8_encode($recursos[$i]["DESATRIREC"])."</td>
                      <td class='sala'>".$recursos[$i]["NUMSAL"]."</td>
                      <td class='predio'>".$recursos[$i]["NUMPRE"]."</td>
                  </tr>";
        }
    ?>
</tr>