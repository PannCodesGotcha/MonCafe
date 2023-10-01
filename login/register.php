<?php include('functions.php') ?>

<form method="post" action="register.php">
	<?php echo display_error(); ?>
</form>

<!DOCTYPE html>
<html>
<head>
<title>MON Cafe &mdash; Grab something to complete your day!</title>
	<title>MON Cafe-Book a Table-Sign Up</title>

<style>

body{
		background-image: url('/images/Headfff.jpg');
		background-size: cover;
		background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
		position: relative;
	}
	.header{
	width: 48%;
	color: white;
  background-color: rgba(120, 120, 120,0.2) ;
	text-align: center;
	border-radius: 5px;
	padding: 30px;
	margin-left: 23%;
	margin-top: 5%;
	border: 1px solid whitesmoke;
}

#logins{
	color: white;
}

form, .content {
	width: 48%;
	margin-left: 30%;
	padding: 30px;
	border: 1px solid whitesmoke;
	background-color: rgba(120, 120, 120,0.2) ;
	border-radius: 0px 0px 10px 10px;
	align-items: center;
	margin-left: 23%;
	border-bottom: none;
}
.input-group {
	margin: 15px 0px 10px 0px;
	color: whitesmoke;
	
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
	color: whitesmoke;
}
.input-group input {
	height: 30px;
	width: 97%;
	padding: 7px 10px;
	font-size: 16px;
	border-radius: 2px;
	border: 1px solid gray;
	background-color: whitesmoke; 
	opacity: 0.45;

}

.btn {
	padding: 15px;
	font-size: 15px;
	color: white;
  background-color:#FF597B;
	border: none;
	
	font-family: 'Times New Roman', Times, serif;
	margin-left: 45%;
}
.btn:hover{
	padding: 15px;
	font-size: 15px;
	color: #189AB4;
  background-color:white;
	border: none;
	font-family: 'Times New Roman', Times, serif;
	margin-left: 45%;

}

.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
  background-color:#189AB4;
	background: #dff0d8; 
	border: 1px solid #189AB4;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
p{
	color: white;
}
a{
	color: white;
}
		
		
		
	</style>
</head>

<body>
<div class="header">
<h1><span>︵‿୨</span> Sign Up <span>୧‿︵</span></h1>
</div>

<form method="post" action="register.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Sign Up</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
	<p>
		Back to Home? <a href="homepage.php">Home</a>
	</p>
</form>
</body>
</html>