<input type="text" id="codrec" value="<?php echo $codigo; ?>" style="visibility: hidden;">
<label for="nomrec" class="rotulo">Nome:</label>
<input type="text" name="nome" id="nomrec" class="entrada" value="<?php echo $nome; ?>">
<label for="nommarrec" class="rotuloDireita">Marca:</label>
<input type="text" name="marca" id="nommarrec" class="entrada" value="<?php echo $marca; ?>"><br>
<input type="radio" name="idtiprec" value="E" id="equip" class="entrada tipo"
<?php
    // Este campo vem marcado como padrao. Então, ele somente não será marcado caso o outro já esteja.
    if ($tipo !== "S")
    {
        echo "checked";
    }
?>>
<label for="equip" class="rotulo">Equipamento</label>
<label for="numsal" class="rotuloDireita2">Sala:</label>
<input type="text" name="sala" id="numsal" class="entrada" value="<?php echo $sala; ?>"><br>
<input type="radio" name="idtiprec" value="S" id="amb" class="entrada tipo"
<?php
    if ($tipo == 'S')
    {
        echo "checked";
    }
?>
>
<label for="amb" class="rotulo">Ambiente</label>
<label for="numpre" class="rotuloDireita2">Prédio</label>
<input type="text" name="predio" id="numpre" class="entrada" value="<?php echo $predio; ?>"><br>
<label for="desatrirec">Informações do recurso</label><br>
<textarea id="desatrirec" COLS=60 ROWS=5 name="informacoes"><?php echo $informacoes; ?></textarea><br><br   >
<input type="radio" name="statusrec" value="D" id="disp" class="entrada status"
    <?php
       if ($status != 'I')
       {
            echo "checked";
       }
    ?>
> <label for="disp">Disponivel</label><br>
<input type="radio" name="statusrec" value="I" id="indisp" class="entrada status"
    <?php
    if ($status == 'I')
    {
        echo "checked";
    }
    ?>
> <label for="indisp">Indisponivel</label>