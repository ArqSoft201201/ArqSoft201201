<tr class="header">
    <th>C&oacute;digo</th>
    <th>Nome</th>
    <th>Tipo</th>
    <th>Marca</th>
    <th>Descri&ccedil;&atilde;o</th>
    <th>Sala</th>
    <th>Pr&eacute;dio</th>
    <th>Data Inclus&atilde;o</th>
    <th>Data Atualiza&ccedil;&atilde;o</th>
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

            echo "    <td class='codigo'>".$recursos[$i]["CDRECURSO"]."</td>
                      <td class='nome'>".$recursos[$i]["DSRECURSO"]."</td>
                      <td class='tipo'>".(($recursos[$i]["TPRECURSO"] == 1) ? "Equipamento" : "Ambiente")."</td>
                      <td class='marca'>".$recursos[$i]["DSMARCAREC"]."</td>
                      <td class='informacoes'>".utf8_encode($recursos[$i]["DSATRIBREC"])."</td>
                      <td class='sala'>".$recursos[$i]["NRSALA"]."</td>
                      <td class='predio'>".$recursos[$i]["NRPREDIO"]."</td>
                      <td class='data-inclusao'>".$recursos[$i]["DTINCLUSAO"]."</td>
                      <td class='data-atualizacao'>".$recursos[$i]["DTATUALIZACAO"]."</td>
                  </tr>";
        }
    ?>
</tr>