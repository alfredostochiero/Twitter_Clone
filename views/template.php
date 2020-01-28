<html>
	<head>
		<title>Twitter</title>
		<link rel="stylesheet" href="assets/css/template.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css"/>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	</head>
	<body>
		<div class="topo">
			<div class="topoint">
				<div class ="topoleft">TWITTER </div>
				<div class="toporight"><?php echo $viewData['nome'] ?> - <a href="/PHP_B7WEB/Twitter_Clone/login/sair">Sair</a>
				<div style="clear:both"></div>
			</div>
		</div>
		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>				
	<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>	
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	</body>
</html>