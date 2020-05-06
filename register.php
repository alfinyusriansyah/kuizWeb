<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

<form action="login.php" method="POST">
	
		<div class= "MyAccount">

			<div class="avatar"><img src="gambar/user.png"></div>
			
			<h2>Sign In to Login</h2>

			<div class="account">
				<input type="text" placeholder="Username" name="username" value="<?=isset($_POST['username']) ? $_POST['username'] : ''?>">
			</div>

			<div class="account">
				<input type="email" placeholder="Email" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>">
			</div>

			<div class="account">
				<input type="Password" placeholder="Password" name="password" value="<?=isset($_POST['password']) ? $_POST['password'] : ''?>">
			</div>

			<button type="submit" class="button">Login</button>

			<button type="Reset" class="button">Reset</button>

			<div class="buttom">
				<a href="#">Register</a>
			</div>

		</div>

		<div class="animationarea">
	
		</div>

</form>	


</body>
</html>