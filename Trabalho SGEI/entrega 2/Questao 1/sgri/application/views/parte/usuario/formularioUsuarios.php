<input type="text" id="codigo" value="<?php echo $codigo; ?>" style="visibility: hidden;">
<label for="nom" class="rotulo">Nome:</label>
<input type="text" name="nome" id="nom" class="entrada" value="<?php echo $nome; ?>"><br>
<label for="senha" class="rotulo">Senha:</label>
<input type="password" id="senha" class="entrada" value="<?php echo $senha?>"><br>
<label for="confirmacao" class="rotulo">Confirmação de Senha:</label>
<input type="password" id="confirmacao" class="entrada" value="<?php echo $senha?>"><br>
<label for="tipo" class="rotulo">Tipo:</label>
<select name="tipo" id="tipo" class="entrada">
<!--    <option value="1" >Infra</option>-->
<!--    <option value="2">Professor</option>-->
<!--    <option value="3">Coordenador</option>-->
    <?php
        foreach($tipoUsuario as $tipoUsu)
        {
            if ($tipoUsu["CDTPUSU"] === $tipo)
            {
                echo "<option value='".$tipoUsu["CDTPUSU"]."' selected='selected'>".$tipoUsu["NMTPUSU"]."</option>";
            }
            else
            {
                echo "<option value='".$tipoUsu["CDTPUSU"]."'>".$tipoUsu["NMTPUSU"]."</option>";
            }
        }
    ?>
</select><br>
<label for="status" class="rotulo">Usuário Ativo</label>
<input type="checkbox" name="status" id="status" class="entrada" <?php if($status === "A")echo "checked ='yes'"?>">
