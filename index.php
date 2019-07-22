<?php
  include("./functions/functions.php");
  $flag = 1337;
  // include is in the top because session_start  must be before any html tag
  include("./pages/login.php");
  include("./pages/signup.php");
  include('./pages/resetpwd/r1.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NavBel</title>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    
    
  </head>
  
  <body  data-spy="scroll" data-target=".fixed-top">
   <!-- Body of  the webPage-->

    <!-- Preloader -->
	  <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
     <!--  Navigation Logo-->
      <a class="navbar-brand logo-image" href="index.php">
        <img src="img/navlogo_min.png"  alt="alternative"></a>
        <!--- Mobile Menu Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
                </li>
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.html#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <li class="nav-item ">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
                <li class="nav-item">
              <a  href="#loginModal"  class="nav-link" data-toggle="modal" data-target="#loginModal" >Log in</a>
            </li>
            <li class="nav-item">
              <a href="#signupModal" class="nav-link" data-toggle="modal" data-target="#signupModal">Sign up</a>
            </li>
                 
            </ul>
            
        </div>
    
    </nav>
   <!-- End Of the nav Bar -->

<!-- Header -->
<header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>MOBILE APP <br>FOR <span id="js-rotating">DESIGNERS, MARKETERS, DEVELOPERS</span></h1>
                            <p class="p-large">Leno is one of the easiest and feature packed marketing automation apps in the market. Download it today!</p>
                            <a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-google-play"></i>PLAY STORE</a>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="img/header-iphone.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


 <!-- Testimonials -->
 <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="img/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased Leno.</p>
                                            <p class="testimonial-author">Jude Thorn - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="img/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I don't know how I managed to get work done without Leno. The speed of this application is amazing!</p>
                                            <p class="testimonial-author">Roy Smith - Developer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="img/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">This app has the potential of becoming a mandatory tool in every marketer's day to day operations.</p>
                                            <p class="testimonial-author">Marsha Singer - Marketer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="img/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Searching for a great marketing automation app was difficult but thankfully I found Leno.</p>
                                            <p class="testimonial-author">Tim Shaw - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="img/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Leno's support team is amazing. They've helped me with some issues and I am so grateful to them.</p>
                                            <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="img/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Who would have thought that Leno can provide such amazing results in just a few weeks of use</p>
                                            <p class="testimonial-author">Ann Black - Developer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->

      
<!--
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="img/navlogo.png" width="80" height="37" />
          <h5 class="d-inline align-middle">NavBel</h3>
        </a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a  href="#loginModal"  class="nav-link" data-toggle="modal" data-target="#loginModal" >Log in</a>
            </li>
            <li class="nav-item">
              <a href="#signupModal" class="nav-link" data-toggle="modal" data-target="#signupModal">Sign up</a>
            </li>
          </ul>
        </div>
      </div>  -->
    
              
    <!-- Login Modal -->
    <div class="modal" tabindex="-1" id="loginModal">
        <div class="modal-dialog">
          <div class="modal-content" id="login-modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Log in</h5>
              <button class="close" data-dismiss="modal">&times;</button>
            </div>
  
            <div class="modal-body">
              <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <i class="input-group-text fas fa-envelope"></i>
                    </div>
  
                    <input
                      type="text"
                      name="login"
                      class="form-control"
                      placeholder="E-mail"
                    />
                  </div>
                </div>
  
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <i class="input-group-text fas fa-unlock"></i>
                    </div>
  
                    <input
                      type="password"
                      name="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                </div>
  
                <input
                  type="submit"
                  value="Log in"
                  class="btn btn-primary btn-block"
                  name="signin"
                />
                <p class="text-center mt-4">
                  <a id="FPModal" href="javascript:void(0)">Forgot password?</a>
                </p>
                <!--
  
                  data-toggle="modal"
                      this link is not necessary and is turned off because there's a bug in it. To fix later either with bootstarp or, if necessary, with jQuery.
                    <p class="text-center mt-1">Don't have an account?<a id="signupModal" href="#" data-toggle="modal" data-target="#signupModal1"> Sign up in seconds</a></p> -->
              </form>
              <?php
                //include("./pages/login.php");
              ?>
            </div>
          </div>
  <!-- Login Modal -->
  
  <!-- Forgot Password Modal -->
          <div class="modal-content" id="fp-modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Log in</h5>
  
              <button class="close" data-dismiss="modal">&times;</button>
            </div>
  
            <div class="modal-body">
              <p>
                To reset your password, enter the e-mail address of your NavBel
                account.
              </p>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <i class="input-group-text fas fa-envelope"></i>
                    </div>
  
                    <input
                      type="text"
                      name="email"
                      class="form-control"
                      placeholder="E-mail"
                    />
                  </div>
                </div>
  
                <input
                  type="submit"
                  value="Submit"
                  class="btn btn-primary btn-block"
                  id="FPFinal"
                  name="reset-password"
                />
                
              </form>
            </div>
          </div>
  <!-- Forgot Password Modal -->
  
  <!-- Forget Password Final Modal -->
          <div class="modal-content" id="fpf-modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Log in</h5>
  
              <button class="close" data-dismiss="modal">&times;</button>
            </div>
  
            <div class="modal-body">
              <p>
                The instructions to reset your password have been sent to you by
                e-mail.
              </p>
            </div>
          </div>
        </div>
      </div>
  <!-- Forget Password Final Modal -->    
  
     <!-- Sign up Modal -->   
     <div class="modal" id="signupModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Sign up</h5>
              <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <div class="input-group mb-4 mt-3">
                        <div class="input-group-prepend">
                          <i class="input-group-text fas fa-user"></i>
                        </div>
                      
                        <input type="text" name="fname" class="form-control " placeholder="First Name"> 
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group mb-4 mt-3">
                        <div class="input-group-prepend">
                          <i class="input-group-text fas fa-user"></i>
                        </div>
                      
                        <input type="text" name="lname" class="form-control " placeholder="Last Name"> 
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <i class="input-group-text fas fa-envelope"></i>
                          </div>
                        
                          <input type="text" name="email" class="form-control" placeholder="E-mail"> 
                        </div>
                      </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <i class="input-group-text fas fa-unlock"></i>
                            </div>

                            <input type="password" name="sgpassword"class="form-control" placeholder="Password">
                         </div>   
                      </div>

                      <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <i class="input-group-text fas fa-redo"></i>
                            </div>

                            <input type="password" name="confirmSgpassword" class="form-control" placeholder="Confirm Password">
                         </div>   
                      </div>

                    <div class="form-group mb-4">
                        <div class="input-group mb-4 mt-3">
                            <div class="input-group-prepend">
                                <i class="input-group-text "> <span class="no-italics">School Year</span></i>
                            
                            </div> 
                        <select class="form-control" id="syear" name="year">
                          <option value="">
                            ...
                          </option>
                          <option value="1">
                            1 CPI
                          </option>
                          <option value="2">  
                              2 CPI
                          </option>
                          <option value="3">
                              1 CS
                          </option>
                          <option value="4">
                              2 CS
                          </option>
                          <option value="5">
                              3 CS
                          </option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                          <input type="file" id="myfile" name="img">
                          <label class="custom-file-label" for="myfile">Upload Profile Picture</label>
                        </div>
                    </div>

                  <input type="submit" value="Sign up" class="btn btn-primary btn-block mt-4" name="submit">
                  </form>
                  <?php
                    //include("./pages/signup.php");
                  ?>
            </div>
          </div>
        </div>
      </div>
            

    





    <script>
        
  $(document).ready(function(){
        // Get the current year for the copyright
        // I haven't used this line yet, it's for later
        //$('#year').text(new Date().getFullYear());
        


    $('#FPModal').on('click', function() {
          $('#login-modal-content').hide(function() {
            $('#fp-modal-content').show();
          });
        });

        $('#FPFinal').on('click', function() {
          $('#fp-modal-content').hide(function() {
            $('#fpf-modal-content').show();
          });
        });
  });     

      </script>
          <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
  </body>
</html>
