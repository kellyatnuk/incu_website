<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>COTO</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('template/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('template/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="{{asset('template/images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="projects.html">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                     </li>
                  </ul>
                  <div class="search_icon"><a href="#"><img src="{{ asset('template/images/search-icon.png')}}"></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end --> 
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital">We<br>Make Your<br>Dream Home</h1>
                     <div class="btn_main">
                        <div class="more_bt"><a href="#">Contact us</a></div>
                        <div class="contact_bt active"><a href="#">get a quote Now</a></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">We<br>Make Your<br>Dream Home</h1>
                     <div class="btn_main">
                        <div class="more_bt"><a href="#">Contact us</a></div>
                        <div class="contact_bt active"><a href="#">get a quote Now</a></div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">We<br>Make Your<br>Dream Home</h1>
                     <div class="btn_main">
                        <div class="more_bt"><a href="#">Contact us</a></div>
                        <div class="contact_bt active"><a href="#">get a quote Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-left"><img src="images/left-icon.png"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-right"><img src="images/right-icon.png"></i>
            </a>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_main">
                     <div class="about_taital">About company</div>
                     <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                     <div class="about_bt"><a href="#">About More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="images/about-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- service section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="services_taital">Our Services</div>
            <p class="services_text">It is a long established fact that a reader will be distracted by the readable</p>
         </div>
         <div class="services_section_2 layout_padding">
            <div class="container-fluid padding_0">
               <div class="box_main">
                  <div class="box_left">
                     <div class="box_left_main">
                        <div class="box_left_one">
                           <div class="image_1"><img src="images/img-1.png"></div>
                        </div>
                        <div class="box_right_one">
                           <div class="icon_1"><img src="images/icon-1.png"><span class="padding_left_10">architecture  Design</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the </p>
                        </div>
                     </div>
                     <div class="see_bt"><a href="#">See More</a></div>
                  </div>
                  <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><img src="images/icon-2.png"><span class="padding_left_10">architecture  Design</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the </p>
                        </div>
                     </div>
                     <div class="see_bt"><a href="#">See More</a></div>
                  </div>
                  <div class="box_right">
                     <div class="box_left_main">
                        <div class="box_right_one">
                           <div class="icon_1"><img src="images/icon-3.png"><span class="padding_left_10">architecture  Design</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the </p>
                        </div>
                        <div class="box_left_one">
                           <div class="image_2"><img src="images/img-2.png"></div>
                        </div>
                     </div>
                     <div class="see_bt"><a href="#">See More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- project section start -->
      <div class="project_section layout_padding">
         <div class="container">
            <h1 class="project_taital">Latest Projects</h1>
            <div class="project_menu">
               <ul>
                  <li class="active"><a href="#">All</a></li>
                  <li><a href="#">Building</a></li>
                  <li><a href="#">Commercial</a></li>
                  <li><a href="#">Interior Design</a></li>
                  <li><a href="#">Residential</a></li>
               </ul>
            </div>
         </div>
         <div class="project_section_2 layout_padding">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div><img src="images/img-3.png" class="image_3"></div>
                  </div>
                  <div class="col-sm-3">
                     <div><img src="images/img-4.png" class="image_3"></div>
                  </div>
                  <div class="col-sm-3">
                     <div><img src="images/img-5.png" class="image_3"></div>
                  </div>
                  <div class="col-sm-3">
                     <div><img src="images/img-6.png" class="image_3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- project section end -->
      <!-- philosophy section start -->
      <div class="philosophy_section layout_padding">
         <div class="container">
            <h1 class="philosophy_taital">Our Philosophy</h1>
            <p class="philosophy_text">It is a long established fact that a reader will be distracted by the readable</p>
         </div>
         <div class="philosophy_section_2 layout_padding">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 padding_0">
                     <div class="philosophy_box_main">
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">01</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Quick in Response</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">02</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Satisfaction Guarantee</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">03</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Expert & Professional</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">04</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">Professional Approach</h3>
                           </div>
                        </div>
                        <div class="philosophy_box">
                           <div class="philosophy_left">
                              <h1 class="number_text">05</h1>
                           </div>
                           <div class="philosophy_right">
                              <h3 class="quick_text">High Quality Work</h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 padding_0">
                     <div class="image_7"><img src="images/img-7.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- philosophy section end -->
      <!-- project section start -->
      <div class="project_section_3 layout_padding">
         <div class="container">
            <h1 class="project_taital">Our Features Projects</h1>
            <p class="philosophy_text">It is a long established fact that a reader will be distracted by the readable</p>
         </div>
         <div class="project_section_2 layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-4.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-5.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-6.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-4.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-5.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-6.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-4.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-5.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div>
                                 <img src="images/img-6.png" class="image_6">
                                 <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- project section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Get In Touch</h1>
         </div>
         <div class="contact_section_2 layout_padding">
            <div class="container">
               <div class="mail_section">
                  <div class="row">
                     <div class="col-md-6">
                        <input type="" class="input_text" placeholder="Name" name="Name">
                     </div>
                     <div class="col-md-6">
                        <input type="" class="input_text" placeholder="Email" name="Email">
                     </div>
                  </div>
                  <input type="" class="input_text" placeholder="Phone Number" name="Phone Number">
                  <textarea name="comment" class="massage_box" form="usrform">Message</textarea>
                  <div class="send_bt">
                     <div class="send_text"><a href="#">SEND</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- newslatter section start -->
      <div class="newslatter_section layout_padding">
         <div class="container">
            <div class="newslatter_main">
               <h1 class="looking_text">Do you looking for Architecture design expertise?</h1>
               <div class="quote_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
      </div>
      <!-- newslatter section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">What Is say clients </h1>
            <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum </p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <h4 class="henrry_name">Henrry Jo</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <h4 class="henrry_name">Henrry Jo</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2 layout_padding">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <h4 class="henrry_name">Henrry Jo</h4>
                              <h6 class="henrry_text">( long established )</h6>
                           </div>
                           <div class="client_right">
                              <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/map-icon.png" class="image_main"><span class="padding_left_10">No.123 Chalingt Gates, Supper market New York</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/call-icon.png" class="image_main"><span class="padding_left_10">(+71 7986543234)</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/mail-icon.png" class="image_main"><span class="padding_left_10">demo@gmail.com</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>