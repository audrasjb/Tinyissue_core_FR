<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tiny Issue</title>

<?php echo Asset::styles(); ?>
</head>
	<body>
	<div id="container">
		<div class="logo"></div>
		<div id="login">


			<form method="post" action="">


				<table class="form" >
					<tr>
						<td colspan="2" style="color: #a31500;"><?php echo Session::get('error'); ?></td>
					</tr>
					<tr><th colspan="2">Bienvenue sur <a href="http://support.atelier-111.fr">support.atelier-111.fr</a>, l'interface de gestion des incidents de l'<a href="http://atelier-111.fr/">Atelier 111</a></th></tr>
					<tr><th colspan="2">Connexion à l'interface :</th></tr>
					<tr>
						<th>Adresse email</th>
						<td><input type="text" name="email" /></td>
					</tr>
					<tr>
						<th>Mot de passe</th>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<th></th>
						<td>
							<label><input type="checkbox" value="1" name="remember" /> Se souvenir de mon compte </label><br /><br />
							<input type="submit" value="Connexion" class="button primary"/>
						</td>
					</tr>
				</table>

				<?php echo Form::hidden('return', Session::get('return', '')); ?>
				<?php echo Form::token(); ?>
			</form>
		</div>
	</div>
</body>

<?php echo Asset::scripts(); ?>

</html>