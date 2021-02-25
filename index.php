<?php


    include 'php/crypto.php';
    include 'php/elliptic.php';

    $key2 = gen_key();
    $en_message = '';
    $message ='';
    
    if(isset($_POST['encrypt']))
    {
        $key = $_POST['yemail'];
        $message = $_POST['message'];
        $option = $_POST['type'];
       
        $en_message = encrypt($key,$message,$option);
    }
    else if(isset($_POST['decrypt']))
    {
         
        $message = $_POST['message'];
        $option = $_POST['type'];
        
        $en_message = decrypt($message,$option);
    }


echo'
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        
        <meta charset="utf-8">
        
        
       
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/logo.png">
        
        
        
        <title>CRYPTX</title>
       <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/tooltip.min.css"/>
        <link rel="stylesheet" href="css/sticky.min.css"/>

        
        <link rel="stylesheet" href="css/nav.min.css">
        <link rel="stylesheet" href="css/shinchan.css"/>
        <!--Old People stuffs xd:) -->
        <!-- Modernizr Plugin -->
       
        <!-- END Modernizr Plugin -->
        <!--[if lt IE 9]>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <!--End Head -->
    <!--Body Starts -->
    <body>
        <!-- Loading Screen -->
        <div id="loader-wrapper">
            <!-- Loading Image -->
            <div class="loader-img">
                <img src="img/logo1.png" alt=""/>
            </div>
            <!-- END Loading Image -->
            <!-- Loading Screen Split -->
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
            <!-- End Loading Screen Split -->
        </div>
        <!-- End Loading Screen -->
        <!-- Main Container -->
        <div class="container">
            <!-- Home -->
            <div id="home" class="home image-bg-3 overlay-dark">
                <!-- Home Content -->
                <div class="content">
                    <h4 class="semi-title gray1 bold uppercase f-extra-small">SLYTHERIN PRESENTS  </h4>     <BR>
                    <h2 class="brand ultrabold uppercase white f-huge glitch" data-text="  CRYPTX">CRYPTX</h2>
                    <!-- Home Title -->
                    <!-- End Home Title -->
                    <!-- Separator -->
                     
                    
                        </div>
                    
                   
                </div>
                
                <!-- End Home Content -->
            </div>
            <!-- End Home -->
            <!-- All Sections -->
            <div class="sections">
                <!-- Sticky Navigation -->
                <div data-uk-sticky>
                    <!-- Navigation Starts -->
                    <div class="navigation">
                        <!-- Navigation Heading -->
                        <div class="navbar-header">
                            <!-- Mobile Navigation Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- End Mobile Navigation Button -->
                            <!-- Navigation Logo -->
                            <a class="navbar-brand white" href="#" data-uk-smooth-scroll>CryptX
                            </a>
                        </div>
                        <!-- End Navigation Heading -->
                        <!-- Navigation Links -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!-- Navigation List -->
                            <ul class="nav navbar-nav f-small normal raleway">
                                <!-- Dropdown -->
                                <li>
                                    <a href="#services" data-uk-smooth-scroll>Home</a>
                                </li>
                                <!-- End Dropdown -->
                                <li>
                                    <a href="#services" data-uk-smooth-scroll>About Us </a>
                                </li>
                               
                                <li>
                                    <a href="#contact" data-uk-smooth-scroll>Encrypto/Decryptor</a>
                                </li>
                                
                            </ul>
                            <!-- End Navigation List -->
                        </div>
                        <!-- End Navigation Links -->
                    </div>
                    <!-- Navigation Ends -->
                </div>
                <!-- End Sticky Navigation -->
                <!-- Services -->
                <div id="services" class="black-bg">
                    <!-- Section Content -->
                    <div class="section-content">
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="service col-md-4 col-xs-12">
                                <!-- Service -->
                                <!-- Icon -->
                                <i class="icon ion-ios-flask-outline f-large white"></i>
                                <!-- Title -->
                                <h2 class="ultrabold uppercase f-semi-expanded white " >
                                    About <span class="light">Elliptic curve Encryption</span>
                                </h2>
                                <!-- Service Desp -->
                                <br>
                                <p class="t-left gray1">ECC is  an approach to public key cryptography based on the algebric structure of elliptic curve over finite fields. Indirectly they can be used for encryption by combining the key agreement with a symmetric encryption scheme.</p>
                                <br>

                                <p class=t-left gray1">
                                    Public key cryptography is based on the interactability of certain mathematical problem. Elliptic curve public key is of size 256 bits but we have made a prototype with a size of 32 bit.
                                </p>


                                <!-- End Service -->
                            </div>
                            <br>

                            <h2 class="ultrabold uppercase f-semi-expanded white">
                                How to use <span class = "light"> CryptX?</span>
                                </h2>
                                <p class=t-left gray1">
                                    1. If you want to send message by ECC encryption, you will need the public key of the receiver.
                                    <br>
                                    2. type in the message in the message box, type the key and select the ECC and press "Encrypt"
                                    <br>
                                    3. The receiver can type the message in the message box and select the ECC and press "Decrypt"
                                    <br>
                                    4. by pressing the decrypt button the encrypted message will be decrypted using the receivers private key only.
                                    <br>

                                </p>
                            <!-- End Column -->
                            <!-- Column -->
                            
                            <!-- End Column -->
                            <!-- Column -->
                            
                            <!-- End Column -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Section Content -->
                </div>
                <!-- End Services -->
                 <div id="contact" class="image-bg overlay-dark" data-uk-parallax="{bg: "-200"}">
                    <!-- Section Content -->
                    <div class="section-content">
                        <!-- Row -->
                        
                            <!-- End Column -->
                            <!-- Column -->
                            <div class="col-md-6">
                                <!-- Contact Container -->
                                <div id="contact-wrapper">
                                    <!-- Comfermation Results -->
                                    
                                    <!-- END Comfermation Results -->
                                    <!-- Contact Form -->
                                    <form  method="post" action="index.php">
                                       
                                       
                                        <textarea type="text" name="message" placeholder="Message / Encrypted Message"></textarea>
                                    
                                        
                                        <select  name = "type">
                                            <option value ="0" disabled selected>- Category -</option>
                                            <option value="1" style=""> Morse Code</option>
                                            <option value="2" style=""> Rot 13</option>
                                            <option value="3" style=""> Rot 47</option>
                                            <option value="4" style=""> Base 32(RFC 3584,RFC 4648)</option>
                                            <option value="5" style=""> Base 64(RFC 3584,RFC 4648)</option>

                                        </select>
                                        <br><br><br>
                                        <!-- END Message Input and Validation -->
                                        <!-- Send Button -->
                                        <button type="submit"  name="encrypt">Encrypt</button>
                                        &nbsp; &nbsp; 
                                        <button type="submit"  name = "decrypt">Decrypt</button>
                                        <!-- END Send Button -->
                                    </form>
                                    <!-- END Contact Form -->
                                </div>
                                <!-- END Contact Container -->
                            </div>
                            <!-- End Column -->
                        </div>
                        <!-- End Row -->

                        <div>
                            <!-- Column -->
                            <div class="col-md-6">
                                <!-- Title -->
                                <h2 class="t-left white raleway light uppercase f-large">
                                    Lets get <span class="ultrabold"> Encrypted!</span>

                                </h2>

                                <div>
                                        <br>
                                        <br>
                                        
                                        <h2 class="t-left white raleway light  f-extra-large">';
                                        echo"Your encrypted/decrypted message will appear here: <br><br>";
                                        echo $en_message;


                                        echo'</h2>
                                </div>
                                
                                <!-- Contact Information -->
                                <ul class="contact-info t-left">
                                    <!-- Email -->
                                    
                                    <!-- End Email -->
                                    <!-- Phone -->
                                   
                                    <!-- End Phone -->
                                </ul>
                                <!-- End Contact Information -->
                            </div>
                    </div>

                    <!-- End Subscribtion Form -->
                </div>
                <!-- About Section -->
                <!-- End About Section -->
                <!-- About Section -->
               
                <!-- End Works Section -->
                <!-- Subscribe -->
                   
                <!-- End Subscribe -->
                        <div id="map" class="dark-bg">
                    <!-- Section Content -->
                    <div class="section-content-full">
                        <!-- Row -->
                        <!-- Column -->
                        <!-- End Column -->
                        <!-- Column -->
                        <div class=" no-padding">
                            <!-- Row -->
                           
                            <!-- End Row -->
                            <!-- Row -->
                            <!-- End Row -->
                            <!-- End Column -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Section Content -->
                </div>
                <!-- Contact -->
                <div id="map" class="dark-bg">
                    <!-- Section Content -->
                    <div class="section-content-full">
                        <!-- Row -->
                        <!-- Column -->
                        <!-- End Column -->
                        <!-- Column -->
                        <div class=" no-padding">
                            <!-- Row -->
                           
                            <!-- End Row -->
                            <!-- Row -->
                            <!-- End Row -->
                            <!-- End Column -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Section Content -->
                </div>
                <!-- End Contact -->
                <!-- Contact -->
               
                <!-- End Contact -->
                <!-- Footer -->
                <div id="footer" class="image-bg-5 overlay-dark" data-uk-parallax="{bg: "-200"}">
                    <!-- Section Content -->
                    <div class="section-content">
                        <!-- Column -->
                        <div class="footer-details">
                            <!-- Footer Logo -->
                            <a href="#home" class="logo-footer" data-uk-smooth-scroll>
                                <img src="img/logo1.png" alt=""/>
                            </a>
                            <div class="separator-center"></div>
                            <!-- Address -->
                            <p class="gray1">Coded By Team Slytherin at MAKEATHON 2K20 <br>( Parv Gupta, Raghav Kumar, Aditya Ranaut, Vaibhav Goyal , Sudhanshu Poonia )</p>
                        </div>
                        <!-- End Column -->
                    </div>
                    <!-- End Section Content -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End All Sections -->
        </div>
     
        <script src="js/loader.min.js"></script>
        
        <script src="assets/js/main.js"></script>
        
        <script src="js/uikit.min.js"></script>
        
        
       
        <script src="js/sticky.min.js"></script>
        <script src="js/contact.js"></script>
        
        <script src="js/shinchan.js"></script>
       
        
    </body>
</html>';
            
?>