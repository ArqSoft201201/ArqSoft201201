<tr class="header">
    <th>Código</th>
    <th>Turma</th>
    <th>Horário</th>
    <th>Data inicial</th>
    <th>Data final</th>
    <th>Sala</th>
    <?php
    for ($i = 0; $i < count($reservas); $i++)
    {
        if ($i % 2 === 0)
        {
            echo "<tr class='odd'>";
        }
        else {
            echo "<tr>";
        }

        echo "<td class='codigo'>".$reservas[$i]["CODRES"]."</td>
			  <td class='turma'>".$reservas[$i]["NOMTUR"]."</td>
			  <td class='horario'>".$reservas[$i]["NOMHOR"]."</td>
			  <td class='inicio'>".$reservas[$i]["DATINI"]."</td>
			  <td class='fim'>".$reservas[$i]["DATFIM"]."</td>
			  <td class='sala'>".$reservas[$i]["NOMSAL"]."</td>";
    }
    ?>
</tr>