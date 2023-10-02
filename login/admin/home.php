<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Booking-Table</title>
	<link rel="shortcut icon" type="images/x-icon" href="/images/shortcutIcon.ico" /> 
	
	
	<style>   
		*{
            margin: 0;
            padding: 0;
        }

        body {
        background-image: url('images/coffeebg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
          
    }
    .header{
    width: 30%;
    color: white;
  background-color: rgba(250, 250, 250,0.1) ;
    border-radius: 5px 10px 0px 0px;
    padding: 20px;
    margin-left: 30%;
    margin-top: 15%;
    border: 1px solid whitesmoke;
    text-align: center;
}
.content {
    width: 30%;
    margin-left: 30%;
    padding: 20px;
    border: 1px solid whitesmoke;
    background-color: rgba(120, 120, 120,0.2) ;
    border-radius: 0px 0px 10px 10px;
    text-align: center;
}

.btn{
    margin-top:5%;
    margin-left: 38%;
padding: 15px;
font-size: 15px;
color: white;
background-color:#FF597B;
border: none;
font-family: 'Times New Roman', Times, serif;
width: 100px;
display: block;

}
.btn:hover{

padding: 15px;
font-size: 15px;
background-color:transparent;
border: none;
font-family: 'Times New Roman', Times, serif;
border: 1px solid #FF597B;

}

.btns{
    margin-top:5%;
    margin-left: 38%;
padding: 15px;
    font-size: 15px;
    color: white;
  background-color:#189AB4;
    font-family: 'Times New Roman', Times, serif;
  width: 100px;
    display: block;
}
.btns:hover{

    padding: 15px;
    font-size: 15px;
  background-color:transparent;
    font-family: 'Times New Roman', Times, serif;
  border: 1px solid #189AB4;

}

.error {
    width: 40%; 
    margin: 0px auto; 
    padding: 10px; 
    color: White; 
    background: transparent; 
    border-radius: 5px; 
    text-align: left;
}
.success {
  background-color:transparent;
    background: transparent; 
    margin-bottom: 20px;
}

#success{
    color:white;

}

.profile_info{
    color: white;
    font-size: 19px;
        
}   

	</style>

	
</head>
<body>
	<div class="header">
		<h2>MON Cafe-Book a Table-Admin</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/avaa.jpg"  style="height: 120px; width:120px;" >

			

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small >
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'"  class="btn" style="color: white;">logout</a>
						<a href="create_user.php"  class="btns" id="bb"> + add user</a>
           
					</small>
					

					<body class="booking-bg">
    <div class="book-form">
        <div class="form-text">
            
            
                   
               
        
        </div>
    </div>
    
</body>

				<?php endif ?>
			</div>



		</div>
	</div>
</body>
</html>
