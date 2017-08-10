<?php
	include("conectaBanco.php");
	if(isset($_REQUEST['mgm'])){
		$mgm = $_REQUEST['mgm']; // PRINTAR A MGM
	}
?>
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>SGL</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="">SGL</a></strong> by students</h1>
				<nav id="nav">
					<ul>
					<!--	<li><a href="index.html">Home</a></li>
						<li><a href="generic.html">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>-->
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>SGL</h2>
				<p>Bem vindo ao SGL, entre para continuar:</p>
				<ul class="actions">
					<form method="post" action="verificaLogin.php">
						<center>
							<input style="width:30%" type="email" name="email" id="email" value="" placeholder="E-mail" />
							<br>
							<input style="width:30%" type="password" name="password" id="senha" value="" placeholder="Senha" />
							<br>
							<input type="submit" value="Entrar" class="special" /></li>
						</center>
						</form>
				</ul>
			</section>

			<!-- One -->


			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Cadastro</h2>
							<p>Se você ainda não possui uma conta, cadastre-se agora</p>

						</header>
						<header class="major">
							<form method="post" action="cadastroUser.php">
								<center>
									<input  style="width:30%" type="text" name="nome" id="nome" value="" placeholder="Nome" />
									<br>
									<input  style="width:30%" type="date" name="data_nasc" id="dataNasc" value="" placeholder="Data de Nascimento" />
									<br><br>
									<input  style="width:30%" type="email" name="email" id="email" value="" placeholder="E-mail" />
									<br>
									<input  style="width:30%" type="password" name="password" id="senha" value="" placeholder="Senha" />
									<br>
									<input  style="width:30%" type="password" name="password2" id="confSenha" value="" placeholder="Confirmação da Senha" />
									<br>
									<input type="submit" value="Enviar" class="special" /></li>
								</center>
								</form>
						</header>
				</section>

			<!-- Three -->


			<!-- Four -->


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<hr>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
