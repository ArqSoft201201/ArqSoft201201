<input type="text" id="codigo" value="<?php echo $codigo; ?>" style="visibility: hidden;">
<label for="nom" class="rotulo">Nome:</label>
<input type="text" name="nome" id="nom" class="entrada" value="<?php echo $nome; ?>">
<label for="mar" class="rotuloDireita">Marca:</label>
<input type="text" name="marca" id="mar" class="entrada" value="<?php echo $marca; ?>"><br>
<input type="radio" name="tipo" value="1" id="equip" class="entrada"
<?php
    // Este campo vem marcado como padrao. Então, ele somente não será marcado caso o outro já esteja.
    if ($tipo !== 2)
    {
        echo "checked";
    }
?>>
<label for="equip" class="rotulo">Equipamento</label>
<label for="sal" class="rotuloDireita2">Sala:</label>
<input type="text" name="sala" id="sal" class="entrada" value="<?php echo $sala; ?>"><br>
<input type="radio" name="tipo" value="2" id="amb" class="entrada"
<?php
    if ($tipo == 2)
    {
        echo "checked";
    }
?>
>
<label for="amb" class="rotulo">Ambiente</label>
<label for="pre" class="rotuloDireita2">Prédio</label>
<input type="text" name="predio" id="pre" class="entrada" value="<?php echo $predio; ?>"><br>
<label for="inf">Informações do recurso</label><br>
<textarea id="inf" COLS=60 ROWS=5 name="informacoes"><?php echo $informacoes; ?></textarea>