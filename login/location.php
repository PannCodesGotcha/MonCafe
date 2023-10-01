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
         background-image: url('images/locc.jpg');
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
    

product{ 

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
    <title>MON Cafe Story</title>
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
            <h1>L O C A T I O N</h1>
        </div>
    </div><br><br><br>
    <div>
        <h1 style="text-align:center;white-space:pre-wrap;">WHERE YOU CAN FIND US?</h1> <br>
    
        <p class="details"> 

<strong>ADDRESS BRANCH Main</strong> 

<br>39 Howards Road, Station 2, Tarlac City 

<br>Tarlac, Philippines 2300 

<br><br> 

 

 <strong>ADDRESS - BRANCH 2</strong> 

<br>3559 Carangian, Station 2, Angeles City 

<br>Pampangga, Philippines 2352 

<br><br> 

 

<strong>ADDRESS BRANCH 3</strong> 

<br>3944 Howards Road, Station 2, Bulacan City 

<br>Bulacan, Philippines 2300 

<br><br> 

 

<strong>SOCIAL MEDIA: </strong> 

@moncafe <br> 
 <br> 




        <div>
    <h2 id="product-category" style="text-align:center;white-space:pre-wrap;">FIND US</h2> <br>
</div>
<script type="module" src="app.js"></script>
<div id="map" style="margin-left: 35%;"> </div> 
<script>

    function initMap(){
        var location ={lat: 15.48017, lng: 120.59794 }
        var map = new google.maps.Map(document.getElementById("map"),{
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
        position: location,
        map: map,
    });
    }

</script>
<script
    aynch defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDow0Kn1nb1TDDrx5CWFv33PqexH43f2EM&callback=initMap"> 
    
</script>
<br><br><br><br>


           

 
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