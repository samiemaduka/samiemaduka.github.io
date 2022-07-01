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
    <link rel="stylesheet" href="style.css?version=1">
    <link rel="icon" type="image/x-icon" href="icon/head-icon.ico">
    <script src="https://kit.fontawesome.com/8923a9ad68.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam&family=Comfortaa&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <title>Home | GLOBAL LOGISTICS</title>
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

                  <a class=" navbar__link nav__active" href="index.php" ><li class="navbar__list">home</li></a>
                  <a class=" navbar__link" href="about.html"><li class="navbar__list">about</li></a>
                  <a class=" navbar__link" href="services.html"><li class="navbar__list">services</li></a>
                  <a class=" navbar__link" href="../k/Track_Package_online.php"><li class="navbar__list">track shipment</li></a>
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

    <!-- BEGGINING OF SECTION 1 ///////////////////////////////////////////////////// -->
    <section class="section-1">

        <!-- BEGGINING OF SLIDER SECTION -->
        <div class="slide-container">

        <div class="slide active">
            <img class="slide__img" loading="eager" src="image/img-2.jpg" alt="">

            <div class="slide__info">
            <h1 class="slide__head">Industry Standard <span> Warehousing.</span></h1>
            <p class="slide__text">Comprehensive and scalable warehousing </p>
            <div class="slide__btn">
            <a href="about.html"><button class="btn-1">read more</button></a>
            <a href="contact.html"><button class="btn-1">contact us</button></a>
            </div>
            </div>
        </div>
        <div class="slide ">
            <img class="slide__img" loading="eager" src="image/img-3.jpg" alt="">
            <div class="slide__info">
            <h1 class="slide__head">Leading Global <span> Logistics Service </span> </h1>
            <p class="slide__text">We offers a full range of global, ocean-freight services </p>
            <div class="slide__btn">
            <a href="about.html"><button class="btn-1">read more</button></a>
            <a href="contact.html"><button class="btn-1">contact us</button></a>
            </div>
            </div>
        </div>
        <div class="slide">
            <img class="slide__img" loading="eager" src="image/img-1.jpg" alt="">
            <div class="slide__info">
            <h1 class="slide__head">Fastest & Reliable <span> courier Services </span> </h1>
            <p class="slide__text">We offers a full range of global, ocean-freight services
                including FCL, LCL and consolidation. </p>
            <div class="slide__btn">
            <a href="about.html"><button class="btn-1">read more</button></a>
            <a href="contact.html"><button class="btn-1">contact us</button></a>
            </div>
            </div>
        </div>
        <div class="slide__navigation">
            <i class="fa-solid fa-angle-left prev-btn"></i>
            <i class="fa-solid fa-angle-right next-btn"></i>
        </div>
        <div class="slide__visibility">
            <div class="slide__icon active"></div>
            <div class="slide__icon"></div>
            <div class="slide__icon"></div>
        </div>
        </div>
        <!-- END OF SLIDE SECTION -->

        <!-- BEGGINING OF QUOTE US SECTION -->
        <div class="quote">
            <p class="quote__text">Meet The World's Leading Logistics Company </p>
            <a href="contact.html"><button class="quote__btn">quote us</button></a>
        </div>
        <!-- END OF QUOTE US SECTION -->

        <!-- BEGGINING OF TRACK-TRACE -->
        <section class="track-trace">
            <div class="track">
                <h2 class="track__head">track & <span> trace </span></h2>
                <p class="track__text">Here's the fastest way to check the status of your shipment. No need to call Customer Service - our online results give you real-time, detailed progress as your shipment speeds through the <b> GLOBAL LOGISTICS </b> network. </p>
                <div class="track__input">
                <!-- FORM ENDS ////////////////// -->
                    <form method="POST" name="tracking" id="tracking" action="tracking-exec.php">


                        <div>                             
                        <?php
                            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                            echo '<table width="100%" class="fails">';
                            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                echo '<tr><td>',$msg . '</td></tr>'; 
                            }
                            echo '</table>';
                            unset($_SESSION['ERRMSG_ARR']);
                            }
                        ?>
                        </div>

                        <div class="form_input">

                        <label>
                            <input name="tracknumber" type="text" id="tracknumber" class="track__input-text" placeholder="Tracking Parcel" size="34">
                        </label>


                                                    
                        <label>
                            <input type="submit" name="button" id="button" class="track__btn" value="Track">
                        </label>

                        </div>


                    </form>
                <!-- FORM ENDS ////////////////// -->
                </div>

            </div>
            <div class="track__img">
                <img src="image/Globalization-pana.svg" alt="">
            </div>
        </section>
        <!-- END OF TRACK-TRACE SECTION -->

    </section>
    <!-- END OF SECTION 1////////////////////////////////////////////////////////////// -->
    <hr class="hr-1">

    <!-- BEGGINING OF SECTION 2 ////////////////////////////////////////////////////////-->

    <section class="section-2">

        <!-- BEGGINING OF MAP SECTION -->
        <div class="map">
            <h2 class="map__head"> OUR <span> GLOBAL LOGISTICS </span> NETWORK</h2>
            <img class="map__image" src="image/world (1).svg" alt="">
            <!-- <img class="map__image-2" src="image/map.svg" alt=""> -->

        </div>
        <!-- END OF MAP SECTION  -->

         <!-- BEGGINING OF TRANSPORT  -->

        <div class="transport">
            <article class="transport__info transport__box-1">
                <div class="transport-blur">
                <h3 class="transport__head">global freight & <span>transportation</span></h3>
                <p class="transport__text">Global Freight and Transportation capabilities supported by great network of extended partners.
                </p>
                <a href="services.html"><button class="transport__btn">read more</button></a>
                </div>
            </article>
            <article class="transport__info transport__box-2 ">
                <div class="transport-blur">
                <h3 class="transport__head">diplomatic bag & <span>secure logistics </span></h3>
                <p class="transport__text"> secure,cost-effective service to ensure the delivery of mail and other goods where you need it, when you need it. </p>
                <a href="services.html"><button class="transport__btn">read more</button></a>
                </div>
            </article>
            <article class="transport__info transport__box-3">
                <div class="transport-blur">
                <h3 class="transport__head">project <span> management </span></h3>
                <p class="transport__text"> Comprehensive, scalable transportation, warehousing and distribution solutions for projects of any size and scope. </p>
                <a href="services.html"><button class="transport__btn">read more</button></a>
                </div>
            </article>
        </div>
        <!-- END OF TRANSPORT SECTION -->

        <!-- BEGGINING OF CHOOSE US SECTION -->
        <div class="choose-background">
        <div class="choose">
            <h2 class="choose__head"> why <span>choose us?</span></h2>

            <div class="choose__container">

                <div class="choose__info choose_box1" >
                    <i class="fa-solid fa-location-dot choose__icon"></i>
                    <div class="choose-desc">
                        <h3 class="choose-desc__head">track & trace</h3>
                        <p class="choose-desc__text"> Fast way to check the status of your shipment.</p>
                    </div>
                </div>
                <div class="choose__info choose_box2" >
                    <i class="fa-solid fa-house-chimney choose__icon"></i>
                    <div class="choose-desc">
                        <h3 class="choose-desc__head"> secure warehousing</h3>
                        <p class="choose-desc__text"> We leverages a network of operational warehousing facilities.</p>
                    </div>
                </div>
                <div class="choose__info choose_box3" >
                    <i class="fa-solid fa-plane-up choose__icon"></i>
                    <div class="choose-desc">
                        <h3 class="choose-desc__head"> express delivery</h3>
                        <p class="choose-desc__text"> We service your shipments via a diverse operating infrastructure.</p>
                    </div>
                </div>
                <div class="choose__info choose_box4" >
                    <i class="fa-solid fa-truck-fast choose__icon"></i>
                    <div class="choose-desc">
                        <h3 class="choose-desc__head"> domestic services</h3>
                        <p class="choose-desc__text"> We deliver on the next Business day, time sensitive parcels.</p>
                    </div>
                </div>
                <div class="choose__info choose_box5" >
                    <i class="fa-solid fa-earth-americas choose__icon"></i>
                    <div class="choose-desc">
                        <h3 class="choose-desc__head"> global coverage</h3>
                        <p class="choose-desc__text"> US, Europe & Worldwide By Sea & Air We offer a broad range of worldwide freight service.</p>
                    </div>
                </div>
                <div class="choose__info choose_box6" >
                    <i class="fa-solid fa-headset choose__icon"></i>
                    <div class="choose-desc">
                        <h3 class="choose-desc__head"> dedicated support</h3>
                        <p class="choose-desc__text"> Any questions? Get great 24/7 online support and advice from our contact page.</p>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- END OF SECTION 2 ////////////////////////////////////////////////////// -->

    <!-- BEGGINING OF SECTION 3 //////////////////////////////////////////////// -->

    <section class="section-3">
        <!-- BEGGINING OF REQUEST SECTION -->
        <div class="request">
            <h2 class="request__head"> From around the corner to around the globe.</h2>
            <p class="request__text"> We will take care of your cargo and deliver them safe and on time.</p>
            <div class="request-button">
                <a href="about.html"><button class="request__btn"> request a free quote</button></a>
                <a href=""><button class="request__btn">contact us</button></a>
            </div>
        </div>


        <div class="company">
            <img class="company__image" title="when to go home" src="comapny/c1.png" alt="">
            <img class="company__image" src="comapny/c2.png" alt="">
            <img class="company__image" src="comapny/c3.png" alt="">
            <img class="company__image" src="comapny/c4.png" alt="">
            <img class="company__image" src="comapny/c5.png" alt="">
            <img class="company__image" src="comapny/c6.png" alt="">
        </div>

        <article class="quote">
            <p class="quote__text">Contact us now to get a free quote for all your global shipping and cargo need. </p>
            <a href="contact.html"><button class="quote__btn">contact us</button></a>
        </article>
        
    </section>
    <!-- END OF SECTION 3 -->

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


    <script type="text/javascript" src="js/slider.js"></script>
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