<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{margin: 0; 

padding: 0; 

box-sizing: border-box; 

} 

body{ 

 margin: 0; 

padding: 0; 

 width: 100%; 

height: 100vh; 

position: relative; 

padding-bottom: 0px; 

 min-height: 100vh; 

 } 

 .titledesign{ 

 width: 100%; 

 height: 100%; 

overflow: hidden; 

 position: relative; 

 background-image: url('images/img/bg1.jpg'); 

 background-position: center; 

 background-repeat: no-repeat; 

background-size: cover; 

 text-align: center; 

 justify-content: center; 



 } 

.title{ 

position: absolute; 

top: 50%; 

 left: 50%; 

 transform: translate(-50%, -50%); 

 text-transform: uppercase; 

} 

.title h1{ 

 color: hsl(0, 0%, 100%); 

font-size: 60px; 

 letter-spacing: 15px; 

 font-family: "consolas", sans-serif; 

 } 

  

 #product{ 

 font-family:'Times New Roman', Times, serif; 

 text-align: center; 

font-size: 30px; 

 font-weight: bold; 

margin-top: 80px; 

 padding: 10px; 

color: #189AB4; 

position: relative; 

} 

 #product::before{ 

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

 margin: 10px 50px; 

 display: flex; 

 justify-content: center; 

} 

.image{ 

 position: relative; 

 width: 260px; 

 margin: 10px; 

} 

 .foods{ 

 width: 260px; 

 display: block; 

 } 

 .overlay{ 

 position: absolute; 

 top: 0; 

 left: 0; 

 width: 260px; 

 height: 260px; 

 background: rgba(0, 0, 0, 0.6); 

 color: rgb(255, 255, 255); 

 font-family: "consolas", sans-serif;  

 display: flex; 

 flex-direction: column; 

 align-items: center; 

 justify-content: center; 
 opacity: 0; 

transition: opacity 0.25s; 

 } 

.overlay:hover{ 

 opacity: 1; 

} 

 footer{ 

 padding-bottom:30px ; 
 position: relative; 

 text-align: center; 

 } 
       
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>MON Cafe Gallery</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/shortcutIcon.ico" />
    
</head>

<body>   
<link rel="stylesheet" type="text/css" href="style.css" />
    <div class="titledesign" id="top1">  
        <nav class="navbar">
        <ul class="nav-links" id="menu"> 
    <li id="gotoAbout"><a href="aboutus.php" id="bar">ABOUT US</a></li>
    <li id="gotoMenu"><a href="menu.php" id="bar">MENU</a></li>                      
    <li id="gotoDel"><a href="delivery.php" id="bar">DELIVERY</a></li>
        <h1 class="logo"><a href="homepage.php"><img src="./images/logoF.png" width="300px" height="85px" alt="MONCafe Logo" id="gotohome"></a></h1>
    <li id="gotoGal" ><a href="gallery.php" id="bar">GALLERY</a></li>              
    <li id="gotoLoc"><a href="location.php" id="bar">LOCATION</a></li>
    <li id="gotoContact"><a href="contactus.php" id="bar">CONTACT US</a></li>
   </ul>  
        </nav>
            <script src ="app.js"></script> 
          
        <div class="title"> 
            <h1> G  A  L  L  E  R  Y </h1>
        </div>
    </div><br><br><br>
        
        <h3 id="product">COFFEE</h3>
    
        <div class="gallery">
            <div class="image">
                <img class="foods" src="images/img/americano_sqr.jpg">
                <a href="images/img/americano.jpg"><div class="overlay">AMERICANO</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/espresso_sqr.jpg">
                <a href="images/img/espresso.jpg"><div class="overlay">ESPRESSO</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/latte_sqr.jpg">
                <a href="images/img/latte.jpg"><div class="overlay">LATTE</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/macchiato_sqr.jpg">
                <a href="images/img/macchiato.jpg"><div class="overlay">MACCHIATO</div></a>
            </div>
        </div><br><br>
    
        <h3 id="product">FRAPPE</h3>
    
        <div class="gallery">
            <div class="image">
                <img class="foods" src="images/img/mocha_sqr.jpg">
                <a href="img/mocha.jpg"><div class="overlay">MOCHA FRAPPE</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/caramel_sqr.jpg">
                <a href="images/img/caramel.jpg"><div class="overlay">CARAMEL FRAPPE</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/darkchoco_sqr.jpg">
                <a href="images/img/darkchoco.jpg"><div class="overlay">DARK CHOCOLATE FRAPPE</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/hazelnut_sqr.jpg">
                <a href="images/img/hazelnut.jpg"><div class="overlay">HAZELNUT FRAPPE</div></a>
            </div>
        </div><br><br>
    
        <h3 id="product">TEAS</h3>
    
        <div class="gallery">
            <div class="image">
                <img class="foods" src="images/img/greentea_sqr.jpg">
                <a href="img/greentea.jpg"><div class="overlay">GREEN TEA</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/jastea_sqr.jpg">
                <a href="images/img/jastea.jpg"><div class="overlay">JASMINE TEA</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/milktea_sqr.jpg">
                <a href="images/img/milktea.jpg"><div class="overlay">MILK TEA</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/gingertea_sqr.jpg">
                <a href="images/img/gingertea.jpg"><div class="overlay">GINGER TEA</div></a>
            </div>
        </div><br><br>
    
        <h3 id="product">PASTRIES</h3>
    
        <div class="gallery" style="padding-bottom: 90px;">
            <div class="image">
                <img class="foods" src="images/img/pancake_sqr.jpg">
                <a href="img/pancake.jpg"><div class="overlay">PANCAKE</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/donut_sqr.jpg">
                <a href="images/img/donut.jpg"><div class="overlay">DONUT</div></a>
            </div>   
            <div class="image">
                <img class="foods" src="images/img/croissant_sqr.jpg">
                <a href="images/img/croissant.jpg"><div class="overlay">CROISSANT</div></a>
            </div>
            <div class="image">
                <img class="foods" src="images/img/muffin_sqr.jpg">
                <a href="images/img/muffin.jpg"><div class="overlay">MUFFIN</div></a>
            </div>
        </div>
    </div>
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
</body>
</html>