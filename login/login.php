<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/images/shortcutIcon.ico" />
	<title>MON Cafe-Book a Table-Login</title>
	<meta name="robots" content="noindex, nofollow" />
	
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
	width: 40%;
	color: white;
  background-color: rgba(250, 250, 250,0.1) ;
	text-align: center;
	border-bottom: none;
	border-radius: 5px 10px 0px 0px;
	padding: 20px;
	margin-left: 30%;
	margin-top: 15%;
	border: 1px solid whitesmoke;
	
}

#logins{
	color: white;
}

form, .content {
	width: 40%;
	margin-left: 30%;
	padding: 30px;
	border: 1px solid whitesmoke;
	background-color: rgba(120, 120, 120,0.2) ;
	border-radius: 0px 0px 10px 10px;
	align-items: center;
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
	background-color: whitesmoke; opacity: 0.45;


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
	width: 97%; 
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

<link rel="stylesheet" href="style.css"/>
</head>
<body>
<nav class="navbar" id="navbar">
   
	 <ul class="nav-links" id="menu"> 
	 <li id="gotoAbout"><a href="aboutus.php" id="bar">ABOUT US</a></li>
	 <li id="gotoMenu"><a href="menu.php" id="bar">MENU</a></li>                      
	 <li id="gotoDel"><a href="delivery.php" id="bar">DELIVERY</a></li>
			 <h1 class="logo"><a href="homepage.php"><img src="./images/logoF.png" width="300px" height="85px" alt="MONCafe Logo" id="gotohome"></a></h1>
	 <li id="gotoGal" ><a href="gallery.php" id="bar">GALLERY</a></li>              
	 <li id="gotoLoc"><a href="login.php" id="bar">BOOK TABLE</a></li>
	 <li id="gotoContact"><a href="contactus.php" id="bar">CONTACT US</a></li>
	</ul>
	
</nav>
	 <script src ="app.js"></script>   
	<div class="header">
	<h1 id="logins"><span>︵‿୨</span> Login <span>୧‿︵</span></h1>

	</div>
	<form method="post" action="login.php">
	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username"  placeholder="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"  placeholder="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p id="logins">
			Not yet a member? <a href="register.php"><u>Sign up</u></a>
		</p>
		
	</form>
</body>
</html>