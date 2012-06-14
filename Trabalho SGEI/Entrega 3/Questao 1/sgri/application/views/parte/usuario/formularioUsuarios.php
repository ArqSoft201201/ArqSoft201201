<input type="text" id="codigo" value="<?php echo $codigo; ?>" style="visibility: hidden;"><br>
<label for="login" class="rotulo">Login:</label>
<input type="text" name="login" id="login" value="<?php echo $login?>"><br>
<label for="funcionario" class="rotulo">Funcion&aacute;rio:</label>
<select name="funcionario" id="funcionario" class="entrada">
    <?php
        foreach($funcionario as $func)
        {
            if ($func["CODFUN"] === $codfun)
            {
                echo "<option value='".$func["CODFUN"]."' selected='selected'>".$func["NOMFUN"]."</option>";
            }
            else
            {
                echo "<option value='".$func["CODFUN"]."'>".$func["NOMFUN"]."</option>";
            }
        }
    ?>
</select><br>
<label for="senha" class="rotulo">Senha:</label>
<input type="password" id="senha" class="entrada" value="<?php echo $senha; ?>"><br>
<label for="confirmacao" class="rotulo">Confirmação de Senha:</label>
<input type="password" id="confirmacao" class="entrada" value="<?php echo $senha; ?>"><br>
<label for="status" class="rotulo">Usuário Ativo</label>
<input type="checkbox" name="status" id="status" class="entrada" <?php if($status === "A")echo "checked ='yes'"?>">
