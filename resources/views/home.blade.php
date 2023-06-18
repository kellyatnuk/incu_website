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
      <title>JNEC Incubation Center</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                      <li>
                        <a class="nav-link" href="/">Home</a>
                     </li>
                      <li>
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">AdvisoryBoard</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">Mentors</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">Incubatees</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">Events</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                     </li>
                  </ul>
                 
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end --> 
      <!-- banner section start --> 
      <img src="{{ asset('template/images/it.jpg') }}">
    
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_main">
                     <div class="about_taital">About the Centre</div>
                     <p class="about_text">The JNEC Entrepreneurship and Innovation Centre is set up to provide business support & technology transfer initiative for various sectors in the multidisciplinary areas of science, technology, and humanities in the region. The establishment of the centre is supported by the Department of Employment and Entrepreneurship under the Ministry of Labor and Human Resources through Start-up/CSI Flagship program in 2020.</p>
                     <div class="about_bt"><a href="about_more">About More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="/template/images/logo.png" style="padding: 100px"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- service section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="services_taital">Our Services</div>
            <p class="services_text">"The best way to predict the future is to create it." - Peter Drucker</p>
         </div>
                    <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><img src="Template/images/Picture4.png"><span class="padding_left_9">Incubation and Co-Working Spaces </span></div>
                           <p class="long_text">Entrepreneurs can work, collaborate, and access essential facilities such as office spaces and internet connectivity.</p>
                        </div>
                     </div>
                  </div>
                  <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><img src="Template/images/mentorship.JPG"><span class="padding_left_9">Mentorship and Business Coaching</span></div>
                           <p class="long_text">Entrepreneurs refine their business ideas, develop strategies, and navigate challenges. </p>
                        </div>
                     </div>
                  </div>
                  <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><img src="Template/images/mentor.jpg"><span class="padding_left_9">Training and Workshops</span></div>
                           <p class="long_text">Organize training programs and workshops on various aspects of entrepreneurship and innovation.</p>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Feedback</h1>
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

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="/Template/images/map-icon.png" class="image_main"><span class="padding_left_10">Jigme Namgyel Engineering College, IT Building</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="/Template/images/call-icon.png" class="image_main"><span class="padding_left_10">(+975 )</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="/Template/images/mail-icon.png" class="image_main"><span class="padding_left_10">shankarsharma.jnec@rub.edu.bt</span></a></div>
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