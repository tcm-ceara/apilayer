<form action="<?php echo url_for('user/login')?>" method="post">
<label for="user">Usuário</label>
<input type="text" name="user" value="" /><br />

<label for="passwd">Senha:</label>
<input type="password" name="passwd" value="" /><br />

<input type="submit" name="submitbutton" id="submitbutton" value="Entrar" />
</form>
