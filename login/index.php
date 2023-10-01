<?php 
	include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MON Cafe-Book a Table-</title>
	
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .booking-bg{
            background-image: url(images/btbg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            max-width: 1280px;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .book-form{ 
            width: 700px;
            margin-left: 20%;
        }
        .form-text{
            text-align: center;
            margin: 20x 0;
        }
        .form-text h1 span{
           font-size: 20px;
        }
        .form-text h1{
            font-family: 'Times New Roman', Times, serif;
            color: white;
            font-size: 35px;
            margin-bottom: 20px;
        }
        .form-text p{
            font-family: 'Times New Roman', Times, serif;
            color: white;
            font-size: large;
            margin-bottom: 20px;
        }
        @media screen and (max-width:710px) { 

 .main-form{ 

 text-align: center; 

 } 

} 

 .main-form{ 

text-align: center; 
} 

 .main-form div{ 


 width: 300px; 

margin: 10px 10px; 

} 

 .main-form div input{ 

width: 100%; 

font-family: 'Times New Roman', Times, serif; 

background: none; 

border: 1px solid rgb(236, 153, 0); 
font-size: 20px; 

color: white; 

outline: none; 

padding: 3px 0px 10px; 

margin-top: 10px; 

} 

.main-form div select{ 

width: 100%; 

font-family: 'Times New Roman', Times, serif; 

background: none; 

border: 1px solid rgb(236, 153, 0); 

font-size: 20px; 



margin-top: 10px; 

 } 

 #opt{ 

color: black; 

} 

.main-form div span{ 

width: 100%; 

font-family: 'Times New Roman', Times, serif; 

color: white; 

font-size: 25px; 

} 











        
        #book-submit{
            text-align: left;
            width: 100%;
        }
        #book-submit input{
            width: 200px;
            font-family: 'Times New Roman', Times, serif;
            background-color: rgb(236, 153, 0) !important;
            color: white !important;
            transition: all .3s;
            clear: both;
        }
        #book-submit input:hover{
            background-color: black !important;
            color: white !important;
            
        }
#logins{
	color: white;
    }

.btn{
padding: 15px;
	font-size: 15px;
	color: white;
    background-color:#FF597B;
	border: none;
	font-family: 'Times New Roman', Times, serif;
	margin-left:95%;
    width: 100px;
}
.btn:hover{
padding: 15px;
	font-size: 15px;
    background-color:transparent;
	border: none;
	font-family: 'Times New Roman', Times, serif;
    border: 1px solid #FF597B;

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
	border: 1px solid #189AB4;
	margin-bottom: 20px;
}

#success{
    color:white;
}

        .profile_info{
            margin-top: 2px;
            color: white;
            font-size: 19px;
            text-align-last: center;
            align-items: center;


        }
    

        #book-submit input:active{
            font-size: 17px;
            background-color: black !important;
            color: white !important;
            clear: both;
        }
        @media screen and (max-width:710px) {
            .main-form{
                text-align: left;
            }
        }




        
    </style>
</head>
<body>
	<div class="header">
	
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

        </div>
		<!-- logged in user information -->
		<div class="profile_info" >
			<img src="/images/avatar.jpg" style="height: 80px; width:80px;" >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

                    <small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>

                    </small>


						
					<body class="booking-bg">
    <div class="book-form">
        <div class="form-text">
            <h1><span>︵‿︵‿୨</span> Book Now <span>୧‿︵‿︵</span></h1>
            <p>To reserve seats please complete and submit the booking form</p>
        </div>
        <div class="main-form">
            <form>
                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="name" id="name" placeholder="Type your name here..." required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="name" id="name" placeholder="Type your email here..." required>
                </div>
                <div>
                    <span>How many people ?</span>
                    <select name="people" id="people" required>
                        <option value="">people</option>
                        <option id="opt" value="1">1</option>
                        <option id="opt" value="2">2</option>
                        <option id="opt" value="3">3</option>
                        <option id="opt" value="4">4</option>
                    </select>
                </div>
                <div>
                    <span>What time ?</span>
                    <input type="text" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="name" placeholder="btdate" required>
                </div>
                <div>
                    <span>Your phone number ?</span>
                    <input type="number" name="number" id="btnumber" placeholder="Type your number here..." required>
                </div>
                <div id="book-submit">
                    <input type="submit" role="button" value="SUBMIT" id="submit">

                </div>
                   
               
            </form>
        </div>
    </div>
    
</body>


<small>
                        <div role="button"  class="btn" id="logins"><a href="index.php?logout='1'"  id="logins">Logout?</a></div>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>