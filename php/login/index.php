<?php
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/formLogin.css">

<div class="container">
	<div class="card card-container">
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin">
			<span id="reauth-email" class="reauth-email"></span>
			<input type="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
			<input type="password" id="senha" class="form-control" placeholder="Senha" required>
			<!-- <div id="remember" class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div> -->
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
		</form>

		<a href="#" class="forgot-password">
			Forgot the password?
		</a>
	</div>
</div>
