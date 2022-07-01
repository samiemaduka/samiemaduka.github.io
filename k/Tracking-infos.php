<?PHP
 session_start();
 
 if($_SESSION['USER_NUM']==""){
	 header("location: Track_Package_online.php");
		exit();
	 }
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
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <title>Track & Trace | GLOBAL LOGISTICS</title>
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










  <section class="track">

    <div class="logo">
      <img src="icon/logo2.png" alt="logo" height="auto">
      <div class="lordicon">
        <lord-icon
          src="https://cdn.lordicon.com/uetqnvvg.json"
          trigger="loop"
          colors="primary:#a62121,secondary:#251e1e"
          style="width:150px;height:150px">
        </lord-icon>
      </div>
    </div>


    <!--  PHP SCRIPT BEGINS /////////////////////   -->
      <div class="php_script">
        <?php
          $num=$_SESSION['USER_NUM'];

          //Include database connection details
          require_once('admin/Connection/conn.php');
              $addadmin = mysqli_query($login,"select * from tracking where num = '$num'");

          if(!$addadmin){
            echo("error accur in performating the query" . mysqli_error());
          }
          while($row=mysqli_fetch_array($addadmin)) {
            $id = $row['id'];
            $num= $row['num'];
            $shipdat= $row['ship_date'];
            $estimate_dat=$row['Estimated_Date'];
            $ship_type=$row['Shipment_type'];
            $content=$row['Content'];
            $receive=$row['receiver_name'];
            $address=$row['receiver_address'];
            $country=$row['country'];
            $phone=$row['telephone'];
          $status=$row['status']; 
          }
        ?>
      </div>
    <!-- PHP SCRIPT ENDS /////////////////////// -->
                      
    <div class="track_info-container">

        <div class="track_info">


          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Tracking Number:</span></p>
            <p class="track_details"><?php echo $num;?></p>
          </div>



          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Shipment date:</span></p>
            <p class="track_details"><?php echo $shipdat;?></p>
          </div>



          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Estimated Date for Delivery:</span></p>
            <p class="track_details"><?php echo $estimate_dat;?></p>
          </div>



          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Shipment type:</span></p>
            <p class="track_details"><?php echo $ship_type;?></p>
          </div>



          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Content:</span></p>
            <p class="track_details"><?php echo $content;?></p>
          </div>



          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Receiver Name:</span></p>
            <p class="track_details"><?php echo $receive;?></p>
          </div>



          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Receiver Address:</span></p>
            <p class="track_details"><?php echo $address;?></p>
          </div>


          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Item Location:</span></p>
            <p class="track_details"><?php echo $country;?></p>
          </div>


          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Telephone:</span></p>
            <p class="track_details"><?php echo $phone;?></p>
          </div>


          <div class="track_details-container">
            <p class="track_details" id="style13"><span class="style13">Status:</span></p>
            <p class="track_details"><?php echo $status;?></p>
          </div>
                                        
                                      
                                      
        </div>

        <div class="exit_btn">
        <a href="Track_Package_online.php">Go Back &#10558;</a>
        </div>

    </div>

  </section>




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

  <script type="text/javascript" src="js/loader.js"></script>
  <script type="text/javascript" src="js/sidebar.js"></script>
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