<tr class="header">
    <th>C&oacute;digo</th>
    <th>Nome</th>
    <th>Tipo</th>
    <th>Ativo</th>
    <th>Data Inclus&atilde;o</th>
    <th>Data Atualiza&ccedil;&atilde;o</th>
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

        echo "        <td class='codigo'>".$usuarios[$i]["CDUSUARIO"]."</td>
                      <td class='nome'>".$usuarios[$i]["NMUSUARIO"]."</td>
                      <td class='tipo'>".$usuarios[$i]["NMTPUSU"]."</td>
                      <td class='status'>".$usuarios[$i]["IDUSUATIVO"]."</td>
                      <td class='data-inclusao'>".$usuarios[$i]["DTINCLUSAO"]."</td>
                      <td class='data-atualizacao'>".$usuarios[$i]["DTATUALIZACAO"]."</td>
                  </tr>";
    }
    ?>
</tr>