<!DOCTYPE html>
<html>
	<head>
		<style>
		body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
        }
        .titledesign {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
            background-image: url('images/menuu.jpeg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            justify-content: center;
           
        }
        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-transform: uppercase;
        }
        .title h1 {
            color: rgb(255, 255, 255);
            font-size: 60px;
            letter-spacing: 15px;
            font-family: "consolas", sans-serif;
        }
		#bsProduct {
			padding: 0 5vw;
			font-family:'Times New Roman', Times, serif;
            font-size: 30px;
            margin-bottom: 30px;
			margin-left: 80px;
            color:#189AB4;
		}
		.bsImage {
            position: relative;    
            width: 250px;
            margin: 10px;
        }
        .bsFoods{
            width: 250px;
            display: block;
        }
		.bsProduct-name {
			text-transform: uppercase;
			font-size: 18px;
			text-align: center;
			color: white;
		}
		.product-menu {
			position: relative;
			overflow: hidden;
		}
		#product-category {
			padding: 0 10vw;
            font-family:'Times New Roman', Times, serif;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-top: 50px;
            color:#189AB4;
            position: relative;
						
        }
		#product-category::before {
            content: '';
            position: absolute;
            width: 100px;
            height: 3px;
            background-color: #189AB4;
            bottom: -10px;
            left: 50%;
            transform: translate(-50%);
            animation: animate 4s linear infinite;
						
        }
		@keyframes animate {
            0%{
                width: 100px;
            }
            50%{
                width: 200px;
            }
            100%{
                width: 100px;
            }
        }
		.gallery{
            margin: px 50px;
            display: flex;
            justify-content: center;      
        }
		
		.product-container {
			padding: 0 8vw;
			display: flex;
			overflow-x: auto;
			scroll-behavior: smooth;
		}
		.product-container::-webkit-scrollbar {
			display: none;
		}
		.producttt-card {
			flex: 0 0 auto;
			width: 250px;
			height: 450px;
			margin-right: 40px;
		}
		.product-img {
            position: relative;    
            width: 200px;
            margin: 15px;
			overflow: hidden;
        }
		.actl-product {
            width: 200px;
			height: 200px;
            display: block;
		}
		.product-info {
			background: #189AB4;
			padding: 1px;
			margin: 5px;
			border-radius: 2px;
			line-height: 20px;

		}
		.product-name {
			text-transform: uppercase;
			font-size: 18px;
			margin-left: 5px;
			color: white;
		}
		.product-price {

			font-weight: 900;
			font-size: 15px;
			margin-left: 5px;
			color: white;
		}
		.pre-btn,
		.nxt-btn {
			border: none;
			width: 10vw;
			height: 100%;
			position: absolute;
			top: 4vw;
			display: flex;
			justify-content: center;
			align-items: center;
			background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
			cursor: pointer;
			z-index: 8;
		}
		.pre-btn {
			left: 0;
			transform: rotate(180deg);
			align-items: center;
		}
		.nxt-btn {
			right: 0;
			align-items: center;
			
		}
		.pre-btn img,
		.nxt-btn img {
			opacity: 0.3;
		}

		.pre-btn:hover img,
		.nxt-btn:hover img {
			opacity: 1;
		}
		</style>
		<link rel="stylesheet" type="text/css" href="style.css" />
    <title>MON Cafe Menu</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/shortcutIcon.ico" />
	</head>
	<body>
  
    <div class="titledesign" id="top1">
       
        <nav class="navbar">
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
	
	    <div class="titledesign">
        <div class="title">
            <h1> M  E  N  U </h1>
        </div>
    </div><br>
		</div><br><br>
	
	<h3 id="bsProduct">Best Selling</h3>
    
    <div class="gallery">
        <div class="bsImage">
            <img class="bsFoods" src="img/espresso_sqr.jpg">
			<div class="product-info">
				<h2  class="bsProduct-name">Coffee: Espresso</h2>
			</div>
         </div>
         <div class="bsImage">
            <img class="bsFoods" src="img/caramel_sqr.jpg">
			<div class="product-info">
				<h2  class="bsProduct-name">Frappe: Caramel</h2>
			</div>
         </div>
         <div class="bsImage">
            <img class="bsFoods" src="img/milktea_sqr.jpg">
			<div class="product-info">
				<h2  class="bsProduct-name">Teas: Milktea</h2>
			</div>
         </div>
         <div class="bsImage">
            <img class="bsFoods" src="img/donut_sqr.jpg">
			<div class="product-info">
				<h2  class="bsProduct-name">Pastries: Donut</h2>
			</div>
         </div>
    </div>
		
	<br><br>
		
	<section class="product-menu">
		<h3 id="product-category">COFFEE</h3>
		<button class="pre-btn"><img src="img/arrow.png" alt="">
		</button>
		<button class="nxt-btn"><img src="img/arrow.png" alt="">
		</button>
		<div class="product-container">
			<div class="product-card">
				<div class="product-img">
					<img src="img/americano_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Americano</h2>
					<h2 class="product-price">₱140.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/espresso_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Espresso</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/latte_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Latte</h2>
					<h2 class="product-price">₱140.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/macchiato_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Macchiato</h2>
					<h2 class="product-price">₱170.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cappuccino.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cappuccino</h2>
					<h2 class="product-price">₱150.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cubanCoffee.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cuban Coffee</h2>
					<h2 class="product-price">₱150.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cafeConLeche.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cafe Con Leche</h2>
					<h2 class="product-price">₱140.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/butterCoffee.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Butter Coffee</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/mocha.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Mocha Coffee</h2>
					<h2 class="product-price">₱150.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/glace.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Glace Coffee</h2>
					<h2 class="product-price">₱100.00</h2>
				</div>
			</div>
		</div> 
	</section>
	
	<br><br><br>
	
	<section class="product-menu">
		<h3 id="product-category">FRAPPE</h3>
		<button class="pre-btn"><img src="img/arrow.png" alt="">
		</button>
		<button class="nxt-btn"><img src="img/arrow.png" alt="">
		</button>
		<div class="product-container">
			<div class="product-card">
				<div class="product-img">
					<img src="img/mocha_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Mocha Fappe</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/caramel_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Caramel Frappe</h2>
					<h2 class="product-price">₱100.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/darkchoco_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Dark Chocolate</h2>
					<h2 class="product-price">₱100.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/hazelnut_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Hazelnut Frappe</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/matchaFrappe.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Matcha Frappe</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/strawberryFrappe.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Strawberry Frappe</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/blueberryFrappe.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Blueberry Frappe</h2>
					<h2 class="product-price">₱140.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/ubeFrappe.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Ube Frappe</h2>
					<h2 class="product-price">₱100.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cappuccinoFrappe.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cappuccino Frappe</h2>
					<h2 class="product-price">₱120.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/mangoFrappe.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Mango Frappe</h2>
					<h2 class="product-price">₱100.00</h2>
				</div>
			</div>
		</div> 
	</section>
	
	<br><br><br>
	
	<section class="product-menu">
		<h3 id="product-category">TEAS</h3>
		<button class="pre-btn"><img src="img/arrow.png" alt="">
		</button>
		<button class="nxt-btn"><img src="img/arrow.png" alt="">
		</button>
		<div class="product-container">
			<div class="product-card">
				<div class="product-img">
					<img src="img/greentea_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Green Tea</h2>
					<h2 class="product-price">₱50.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/jastea_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Jasmine Tea</h2>
					<h2 class="product-price">₱60.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/milktea_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Milk Tea</h2>
					<h2 class="product-price">₱60.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/gingertea_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Ginger Tea</h2>
					<h2 class="product-price">₱50.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/blackTea.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Black Tea</h2>
					<h2 class="product-price">₱60.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cinnamonTea.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cinnamon Tea</h2>
					<h2 class="product-price">₱60.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/roseTea.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Rose Tea</h2>
					<h2 class="product-price">₱50.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/raspberryTea.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Raspberry Tea</h2>
					<h2 class="product-price">₱60.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/lemonTea.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Lemon Tea</h2>
					<h2 class="product-price">₱50.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/hibiscusTea.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Hibiscus Tea</h2>
					<h2 class="product-price">₱60.00</h2>
				</div>
			</div>
		</div> 
	</section>
	
	<br><br><br>
	
	<section class="product-menu">
		<h3 id="product-category">PASTRIES</h3>
		<button class="pre-btn"><img src="img/arrow.png" alt="">
		</button>
		<button class="nxt-btn"><img src="img/arrow.png" alt="">
		</button>
		<div class="product-container">
			<div class="product-card">
				<div class="product-img">
					<img src="img/pancake_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Pancake</h2>
					<h2 class="product-price">₱30.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/donut_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Donut</h2>
					<h2 class="product-price">₱20.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/croissant_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Croissant</h2>
					<h2 class="product-price">₱20.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/muffin_sqr.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Muffin</h2>
					<h2 class="product-price">₱25.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/empanadas.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Empanadas</h2>
					<h2 class="product-price">₱15.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/ubePie.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Ube Pie</h2>
					<h2 class="product-price">₱25.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/bananaBread.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Banana Bread</h2>
					<h2 class="product-price">₱15.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cheeseMonay.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cheese Monay</h2>
					<h2 class="product-price">₱20.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/cannoli.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cannoli</h2>
					<h2 class="product-price">₱15.00</h2>
				</div>
			</div>
			<div class="product-card">
				<div class="product-img">
					<img src="img/creamBuns.jpg" class="actl-product" alt="">
				</div>
				<div class="product-info">
					<h2  class="product-name">Cream Buns</h2>
					<h2 class="product-price">₱15.00</h2>
				</div>
			</div>
		</div> <br><br><br>
		<center><div button class="placeOrder" role="button"><a href="/menu"></a>BOOK TABLE</div> <center></center>
	</section>
	
	
	<br><br><br>
</div>  
</div>
</div>
</div>
</div>
</div>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="newsletter-form-body">
    <div class="socialscontainer">
        <a class="socials" href="https://www.facebook.com/PANNpter"><span>Facebook</span></a>
        <a class="socials" href="https://twitter.com/pter_PANN"><span>Twitter</span></a>
        <a class="socials" href="https://www.instagram.com/pterpann1"><span>Intagram</span></a>
      </div>   

<header class="headerLetter">
    <h2 class="newsletter-form-header-title">FOR THE LATEST AND GREATEST</h2>
    <div class="newsletter-form-header-description">
    <p class="" data-rte-preserve-empty="true" style="white-space:pre-wrap;"></p>
    </div>
</header>
    <div class="newsletter-form-body">
    <div class="newsletter-form-fields-wrapper form-fields" style="vertical-align: middle;">
    <div id="" class="newsletter-form-field-wrapper form-item field email required" style="vertical-align: bottom;">
   
    <input id="aa" class="newsletter-form-field-element field-element" style="width: 30%; padding: 12px 2px" placeholder="   Email Address" /> <span  button class="newsletterButton" id="demo" type="submit" value="Sign Up" role="button" onclick="myFunction()"><a href="/delivery"></a>SIGN UP</span>
    </div>
    <script>
        function myFunction() {
          document.getElementById("hidden form-submission-text").innerHTML = "Thank you!";
        }
    </script>
<div>
<div id="hidden form-submission-text" style="padding: 10px"></div>
</div>
</div>
</div>
</div>
<div>
<footer id="footer">                  
<nav>

<div class="back-to-top" id="topButton""><a href="#top"  style="color: darkslategray">Back to Top</a></div>
</nav>
<p>Made with love and a drop of unicorn blood. </p>
<div> 
<p>Privacy &nbsp | &nbsp Terms</p> 
</div>
</div>
</footer>     

	<script src="script.js"></script>
	
	</body>
</html>