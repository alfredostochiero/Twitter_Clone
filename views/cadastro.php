
<html>
	<head>
		<title>Twitter</title>
		<link rel="stylesheet" href="../assets/css/template.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap.css"/>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
	</head>
	<body>
		<form method="POST" class="form-group">

			Nome: <br/>
			<input type="text" name="nome" class="form-control"/><br/><br/>
			
			E-mail : <br/>
			<input type="email" name="email" class="form-control"/><br/><br/>

			Senha: <br/>
			<input type="password" name = "senha" class="form-control"><br/><br/>

			<input type="submit" value="cadastrar" class="btn btn-primary"><br/>

			<?php
				if(!empty($aviso)) {  // controller.php uses the function extract() which converts array index into variables
					echo $aviso;
				}
			?>

		</form>


		<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>	
		<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	</body>







