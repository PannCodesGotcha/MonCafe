<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/images/shortcutIcon.ico" /> 
	<title>MON Cafe Admin - Create User</title>
	
	<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/images/shortcutIcon.ico" /> 
	<title>MON Cafe Admin - Create User</title>
	
	<style>

body{
		background: url('images/coffeebg.jpg');
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

#user_type {
	height: 40px;
	width: 100%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}

#options{
	color: #189AB4;
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
	margin-left: 42%;
}
.btn:hover{
	padding: 15px;
	font-size: 15px;
	color: #189AB4;
  background-color:white;
	border: none;
	font-family: 'Times New Roman', Times, serif;
	margin-left: 42%;

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
	
button[name=register_btn] {
			background: #189AB4;
		}
		
</style>
</style>

</head>
<body>
	<div class="header">
	<h1><span>︵‿୨</span>Create User <span>୧‿︵</span></h1>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin" id="options">Admin</option>
				<option value="user" id="options">User</option>
			</select>
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
			<button type="submit" class="btn" name="register_btn"> + Create User</button>
		</div>
	</form>
</body>
</html>
</head>
<body>
	<div class="header">
	<h1><span>︵‿୨</span>Create User <span>୧‿︵</span></h1>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin" id="options">Admin</option>
				<option value="user" id="options">User</option>
			</select>
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
			<button type="submit" class="btn" name="register_btn"> + Create User</button>
		</div>
	</form>
</body>
</html>