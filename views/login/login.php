<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=$site[url]?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Login
					</span>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "E-mail obrigatório">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Senha obrigatória">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit"class="login100-form-btn">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/login/bootstrap/js/popper.js"></script>
	<script src="<?=$site[url]?>assets/login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/login/daterangepicker/moment.min.js"></script>
	<script src="<?=$site[url]?>assets/login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=$site[url]?>assets/js/main.js"></script>

</body>
</html>