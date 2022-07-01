<?php
session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?version=3">
    <link rel="icon" type="image/x-icon" href="icon/head-icon.ico">
    <script src="https://kit.fontawesome.com/8923a9ad68.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam&family=Comfortaa&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <title>Track & Trace | Global Logistics</title>
</head>
<body>


    <div id="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>



   <!-- <div class="top-gradient"></div> -->
   
      
    
   <header class="navbar">
          <div class="navbar__logo"><img src="icon/logo2.png" alt="" width="80%" height="auto">
          </div>

              <ul class="navbar__menu">

                  <a class=" navbar__link " href="index.php" ><li class="navbar__list">home</li></a>
                  <a class=" navbar__link" href="about.html"><li class="navbar__list">about</li></a>
                  <a class=" navbar__link" href="services.html"><li class="navbar__list">services</li></a>
                  <a class=" navbar__link nav__active" href="../k/Track_Package_online.php"><li class="navbar__list">track shipment</li></a>
                  <a class=" navbar__link" href="contact.html"><li class="navbar__list"> contact us</li></a>
                  <div id='google_translate_element' class="bg_screen" ></div>

              </ul>


              
            

              

          <!-- SIDE NAV-BAR -->
              <nav id="mySidebar" class="sidebar">
                  <button href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</button>
                  
                  <a href="index.php">home</a>
                  <a href="Track_Package_online.php">track shipment</a>
                  <a href="about.html">about us</a>
                  <a href="services.html">services</a>
                  <a href="contact.html">contact</a>
    
              </nav>
              <button class="openbtn" onclick="openNav()">☰</button> 
      </header>
    <!-- END OF NAVBAR SECTION -->





    <div class="header">
      <h1>Track & <span>trace</span></h1>
    </div>




        
      <!-- FORM ENDS ////////////////// -->
      <div class="form">


        <div class="form_flex">

          <div class="form_content">
            <h2>Track & <span>Trace</span></h2>
            <p>Here's the fastest way to check the status of your shipment. No need to call Customer Service - our online results give you real-time, detailed progress as your shipment speeds through the GLOBAL LOGISTICS network.</p>
          </div>


          <form method="POST" name="tracking" id="tracking" action="tracking-exec.php">


              <div class="error_msg">                             
                <?php
                  if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                    echo '<div width="100%" class="fails">';
                    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                      echo '<div><p>',$msg . '!</p></div>'; 
                    }
                    echo '</div>';
                    unset($_SESSION['ERRMSG_ARR']);
                  }
                ?>
              </div>

              <div class="form_input">

                <label for="tracknumber">
                  <input name="tracknumber" type="text" id="tracknumber" class="track__input-text" placeholder="Tracking Parcel" size="34">
                </label>


                                            
                <input type="submit" name="button" id="button" class="track__btn" value="Track">

              </div>


          </form>

        </div>

        <div class="form_img">
          <img src="image/GPS navigator-amico.svg" alt="Track Bus" >
        </div>



      </div>
      <!-- FORM ENDS ////////////////// -->



         <!-- BEGGINING OF FOOTER SECTION -->

         <footer class="foot">
        <div class="footer">
        <h2 class="footer__head footer__box1"> <span>GLOBAL LOGISTICS</span>- Providing Smart Logistics Solution Across The World.</h2>

        <div class="footer-info footer__box2">
            <h3 class="footer-info__head">information</h3>
            <div class="footer__menu">
            <ul class="footer-info__menu ">
                <li class="footer-info__list"><a class="footer-info__link" href="index.html">home</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="about.html">about us</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="services.html">our services</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="contact.html">contact us</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="">track & trace</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="https://www.dropbox.com/s/o0us11pvjdvq8km/NCBFAA_terms.pdf?dl=0">NCBFAA Terms</a></li>
            </ul>
            <ul class="footer-info__menu footer-info__menu2">
                <li class="footer-info__list"><a class="footer-info__link" href="services.html">Sea/Ocean Freight</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="services.html">Road Transportation</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="services.html">air freight</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="services.html">warehousing</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="services.html">packaging & storage</a></li>
                <li class="footer-info__list"><a class="footer-info__link" href="services.html"> project management</a></li>
            </ul>
            </div>
        </div>


        <div class="footer-contact footer__box3">
            <h3 class="footer-contact__head">contact us</h3>

            <div class="footer-contact__menu">
            <p class="footer-contact__text">GLOBAL LOGISTICS </p>
            <p class="footer-contact__info"><i class="fa-solid fa-envelope footer-contact__icon"></i>+1 (409) 246-7983</p>
            <p class="footer-contact__info"><i class="fa-solid fa-phone footer-contact__icon"></i>info@globallogistics.com </p>
            </div>

        </div>
        </div>
        <hr class="hr-2">

        <div class="footer-copyright">
            <p class="footer-copyright__text">copyright &copy <span>2022 global logistics.</span>all rights reserved </p>
            <div class="footer-copyright__icon">
                <i class="fa-brands fa-twitter footer__icon"></i>
                <i class="fa-brands fa-facebook-f footer__icon"></i>
                <i class="fa-brands fa-google-plus-g footer__icon"></i>

            </div>

        </div>
    </footer>

      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up top"></i></button>



    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="text/javascript" src="js/loader.js"></script>
    <script>
      function googleTranslateElementInit() {
      new google.translate.TranslateElement({
      pageLanguage: 'en',
      autoDisplay: 'true',
      layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
      }, 'google_translate_element');
      }
      </script>
      <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'>

    </script>

</body>
</html>