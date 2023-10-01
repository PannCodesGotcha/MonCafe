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