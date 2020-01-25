<form method="POST">
	Nome: <br/>
	<input type="text" name="nome"/><br/><br/>

	E-mail : <br/>
	<input type="email" name="email"/><br/><br/>

	Senha: <br/>
	<input type="password" name = "senha"><br/><br/>

	<input type="submit" value="cadastrar">	<br/><br/>
	
	<?php
		if(!empty($aviso)) {  // controller.php uses the function extract() which converts array index into variables
			echo $aviso;
		}
	?>
	
</form>