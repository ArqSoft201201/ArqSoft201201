<?php
    $entidadeReserva = new Model_Reserva($codres);
?>
<!--#####################################-->
<label for="codtur" class="rotulo">Turma:</label>
<select name="codtur" id="codtur" class="codtur">
    <?php
        foreach (Model_Turma::listarTurmasPorProfessor($codfun) as $turmas)
        {
            if ($entidadeReserva->getCodtur() === $turmas["CODTUR"])
            {
                echo "<option value='".$turmas["CODTUR"]."' selected='selected'>".$turmas["DESTUR"]."</option>";
            }
            else {
                echo "<option value='".$turmas["CODTUR"]."'>".$turmas["DESTUR"]."</option>";
            }
        }
    ?>
</select><br>
<!--#####################################-->
<label for="codhor" class="rotulo">Horário:</label>
<select name="codhor" id="codhor" class="codhor">
    <option value="<?php echo $codhor?>" selected="selected"><?php echo $deshor?></option>
</select><br>
<!--#####################################-->
<label for="codsal" class="rotulo">Sala:</label>
<select name="codsal" id="codsal" class="codsal">
    <?php
    if ((bool)$entidadeReserva->getCodSal())
    {
        $sala = new Model_Recurso($entidadeReserva->getCodSal());
        echo "<option value='".$sala->getCodrec()."' selected='selected'>".$sala->getNumsal()." - ".$sala->getNumpre()."</option>";
    }
    ?>
</select><br>
<!--#####################################-->
<label for="datini" class="rotulo">Data inicial:</label>
<input type="text" class="datepicker" id="datini" value="<?php echo $datini?>"><br>
<!--#####################################-->
<label for="datfim" class="rotulo">Data final:</label>
<input type="text" class="datepicker" id="datfim" value="<?php echo $datfim; ?>"><br>
<!--#####################################-->
<label for="desoco" class="rotulo">Ocorrências:</label><br>
<textarea rows="8" cols="80" id="desoco"><?php echo $desoco; ?></textarea><br><br>
<!--#####################################-->

<label for="itemres">Item Reservado</label><br>
<select name="itemreserva" id="itemres" class="itemres">
    <?php
        $listaRec = Model_Itemreserva::obterItemReserva($codres);
        if ($listaRec)
        {
            foreach ($listaRec as $recurso)
            {
                echo "<option value=".$recurso["CODREC"].">".$recurso["NOMREC"]."</option>";
            }
        }
    ?>
</select>
<!--<input type="button" id="caditem" value="Cadastrar itens" />-->
<input type="text" id="codres" value="<?php echo $codres; ?>" style="visibility: hidden;"><br>
<input type="text" id="codfun" value="<?php echo $codfun; ?>" style="visibility: hidden;"><br>