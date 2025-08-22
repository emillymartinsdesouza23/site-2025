<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt - br">
	<head>
		<title>LOGIN</title>
			<!----------------------------------------- HEAD ---------------------------->
			<?php include 'login/includes-login/head.php'; ?>
			<!----------------------------------------- HEAD ---------------------------->
	</head>
	<body>
	<header>
			<!----------------------------------------- HEADER ---------------------------->
			<?php include 'login/includes-login/header.php'; ?>
			<!----------------------------------------- HEADER ---------------------------->
	</header>
    
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="autentica.php">
					<span class="login100-form-title p-b-26">
						BEM VINDO!
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Email válido: a@b.c">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="use o seu e-mail"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha">
						<span class="focus-input100" data-placeholder="Insira sua senha"></span>
					</div>
					<?php 
						if(isset($_SESSION['nao_autenticado'])):
					?>
					<div class="input100 validate-input m-b-18">
						<div class="alert alert-danger" role="alert">
							<center> Usuário ou senha inválidos </center>
						</div>
					</div>
					<?php
						endif;
						unset($_SESSION['nao_autenticado']);
					?>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								ENTRAR
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>
						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
		<div id="dropDownSelect1"></div>
		<footer>
			<!----------------------------------------- FOOTER ---------------------------->
			<?php include 'login/includes-login/footer.php'; ?>
			<!----------------------------------------- FOOTER ---------------------------->
		</footer>
	</body>
</html>