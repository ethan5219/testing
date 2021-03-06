<!DOCTYPE html>
<html  >
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="icon" type="image/png" href=
         <?php echo base_url('/images/filleasy_faviicon.png'); ?>
         sizes="16x16">
      <meta name="description" content="Hong Kong's first one-stop form-filling platform. Change your address, Apply for a Bank Account and pass your information for all your Companies in just minutes.">
      <meta name="og:description" content="Hong Kong's first one-stop form-filling platform. Change your address, Apply for a Bank Account and pass your information for all your Companies in just minutes.">
      <meta property="og:image" content= <?php echo base_url('/images/filleasy_faviicon.png'); ?> />
       <meta property="og:image:width" content="663">
    <meta property="og:image:height" content="475">
      <meta property="og:url" content="<?php echo base_url('/home'); ?>" />
            <title>All your Forms, All in One Place | Fill Easy</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/Material-Design-Icons/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/recaptcha.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="css/home/Home.css">
  
  
  
  
   </head>
   <body>
   
  <?php echo view('admin/header_tc'); ?>
           
      <section class="carousel slide cid-sP2ygGvX4r" data-interval="false" id="slider2-1b">
         <div class="container-fluid content-slider">
         <div class="container-fluid content-slider">
         <div class="content-slider-wrap">
         <div>
            <div class="mbr-slider slide carousel" data-keyboard="false" data-bs-keyboard="false" data-ride="carousel" data-bs-ride="carousel" data-interval="3000" data-bs-interval="3000" data-bs-pause="true" data-pause="true">
               <div class="carousel-inner" role="listbox">
                  <div class="carousel-item slider-fullscreen-image active"  data-bg-video-slide="false" style="background-image: url(assets/images/1-1050x700.jpg);">
                     <div class="container container-slide">
                        <form action="/serviceline/formsubmitted-choosecompany" method="post">
                           <input type="checkbox" id="Change of Address" name="Servicelinecheckbox[]" value="Change of Address" style="display:none" onChange="this.form.submit()">
                           <label class="image_wrapper" for="Change of Address">
                              <picture class="banner-container" style="cursor: pointer">
                                 <source  media="(min-width:690px)" srcset="assets/images/1-1050x700.png"> 
                                 <img src="assets/images/phone1.jpeg" alt="Flowers">
                              </picture>
                              <div class="carousel-caption justify-content-center">
                                 <div class="col-10 align-center"></div>
                              </div>
                           </label>
                        </form>
                     </div>
                  </div>
                  <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/2-1050x700.jpg);">
                     <div class="container container-slide">
                        <form action="/serviceline/formsubmitted-choosecompany" method="post">
                           <input type="checkbox" id="Phone Number & Fax" name="Servicelinecheckbox[]" value="Phone Number & Fax" style="display:none" onChange="this.form.submit()">
                           <label class="image_wrapper" for="Phone Number & Fax">
                              <picture class="banner-container" style="cursor: pointer">
                                 <source media="(min-width:690px)" srcset="assets/images/2-1050x700.png">
                                 <img src="assets/images/phone2.jpeg" alt="Flowers">
                              </picture>
                              <img src="assets/images/2-1050x700.png" alt="phone" title="">
                              <div class="carousel-caption justify-content-center">
                                 <div class="col-10 align-left"></div>
                              </div>
                           </label>
                        </form>
                     </div>
                  </div>
                  <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/4-1050x700.jpg);">
                     <div class="container container-slide">
                        <form action="/serviceline/formsubmitted-choosecompany" method="post">
                           <input type="checkbox" id="Name & ID" name="Servicelinecheckbox[]" value="Name & ID" style="display:none" onChange="this.form.submit()">
                           <label class="image_wrapper" for="Name & ID">
                              <picture class="banner-container" style="cursor: pointer">
                                 <source media="(min-width:690px)" srcset="assets/images/4-1050x700.png">
                                 <img src="assets/images/phone4.jpeg" alt="Flowers"">
                              </picture>
                              <img src="assets/images/4-1050x700.png" alt="name" title="">
                              <div class="carousel-caption justify-content-center">
                                 <div class="col-10 align-left"></div>
                              </div>
                           </label>
                        </form>
                     </div>
                  </div>
                  <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3-1050x700.jpg);">
                     <div class="container container-slide">
                        <form action="/serviceline/formsubmitted-choosecompany" method="post">
                           <input type="checkbox" id="Email" name="Servicelinecheckbox[]" value="Email" style="display:none" onChange="this.form.submit()">
                           <label class="image_wrapper" for="Email">
                              <div class="image_wrapper">
                                 <picture class="banner-container" style="cursor: pointer">
                                    <source media="(min-width:690px)" srcset="assets/images/3-1050x700.png">
                                    <img src="assets/images/phone3.jpeg" alt="Flowers">
                                 </picture>
                                 <img src="assets/images/3-1050x700.png" alt="email" title="">
                                 <div class="carousel-caption justify-content-center">
                                    <div class="col-10 align-left"></div>
                                 </div>
                              </div>
                     </div>
                     </label>
                     </form>
                  </div>
               </div>
               <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" data-bs-slide="prev" href="#slider2-1b"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only visually-hidden">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="prev" data-bs-slide="next" href="#slider2-1b"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only visually-hidden">Next</span></a>
            </div>
         </div>
      </section>
      <section class="features6 cid-sOvLL7B3JG" id="features06-15">
         <svg class="svg-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 40" style="enable-background:new 0 0 1600 40;" preserveAspectRatio="none">
            <style type="text/css">
               .st0 
            </style>
            <path class="st0" d="M-1,15.7c200.1,0,200.7,13.8,400.9,13.8C600,29.5,600.4,9.3,800.5,9.3S998.8,36.8,1199,36.8
               s201.9-21.1,402-21.1v24.1L-1,40V15.7z"></path>
         </svg>
         

         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 pb-5">
               
<section class="extHeader cid-sQXXwISTIt" id="extHeader36-3b" style="background-color: transparent ; padding-top:0px; padding-bottom:50px;">
    <div class="container mbr-black">
        
        
        
        <div style = "text-align: center;" class="typed-text display-5">
            <span class="mbr-text pb-4 mbr-fonts-style mbr-bold display-5">??????????????????????????????</span>
            <span style="border-bottom: 5px solid #2b299e;" class="animated-element mbr-bold" data-speed="75" data-word1="??????!" data-word2="??????!" data-word3="??????!" data-word4="??????!">
            </span>
        </div>
        
    </div>    
</section>
                  <p class="mbr-section-subtitle mbr-fonts-style align-left display-4">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br></p>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <div class="card-wrap">
                     <div class="image-wrap">
                        <img src="/images/Landingpage/find.png" alt="">
                     </div>
                     <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-left m-0 display-4">????????????????????????????????????</h5>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <div class="card-wrap">
                     <div class="image-wrap">
                       <img src="/images/Landingpage/fill.png" alt="">
                     </div>
                     <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-left m-0 display-4">??????????????????????????????????????????</h5>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <div class="card-wrap">
                     <div class="image-wrap">
                          <img style="margin-left:20px;" src="/images/Landingpage/registration.png" alt="">
                     </div>
                     <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-left m-0 display-4">??????????????????????????????</h5>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <div class="card-wrap">
                     <div class="image-wrap">
                           <img style="margin-left:5px;" src="/images/Landingpage/communications.png" alt="">
                     </div>
                     <div class="content-wrap">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-left m-0 display-4">??????????????????????????????</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="clients1 cid-sNMYhKAwJd" id="clients1-y">
         <!-- Block parameters controls (Blue "Gear" panel) -->
         <!-- End block parameters -->
         <div class="container">
            <div class="row  justify-content-center">
               <div class="prevent-animate section-header col-md-12 col-lg-9">
                  <h2 class="mbr-section-title mbr-regular align-center mbr-fonts-style mbr-bold mb-0 display-5">????????????????????????????????????</h2>
                  <h3 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 display-7">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</h3>
               </div>
            </div>
                      <div class="row logo-container">
               <div class="col-lg-1 col-md-3 card">
                  <img src="/images/team/HKSTP.png" alt="">
               </div>
               <div class="col-lg-1 col-md-3 card">
                  <img src="/images/team/we_venture.jpg">
               </div>
               <div class="col-lg-1 col-md-3 card">
                  <img src="/images/Landingpage/hkust.jpg">
               </div>
               <div class="col-lg-1 col-md-3 card">
                  <img src="/images/Landingpage/charles-keith.jpg">
               </div>
            </div>
            <div class="row justify-content-center">
            </div>
         </div>
      </section>
      <section class="carousel slide testimonials-slider firmm4_testimonials4 cid-sNMZd9xUej" data-interval="false" id="testimonials4-10">
         <div class="back"></div>
         <div class="container">
            <div class="col-12 col-lg-12">
               <div class="title_block">
                  <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong>????????????</strong></h3>
                  <div class="carousel-controls">
                     <a class="carousel-control-prev" role="button" data-slide="prev">
                     <span aria-hidden="true" class="mobi-mbri-left mobi-mbri mbr-iconfont"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" role="button" data-slide="next">
                     <span aria-hidden="true" class="mobi-mbri-right mobi-mbri mbr-iconfont"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
               <div class="carousel-inner">
                  <div class="carousel-item">
                     <div class="row justify-content-center">
                        <div class="col-md-6">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-4">????????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-4">????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-4">???????????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-4">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row justify-content-center">
                        <div class="col-md-6">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">???????????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">????????????????????????????????????????????????????????????????????????????????????????????????????????????.</p>
                           </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">????????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row justify-content-center">
                        <div class="col-md-6">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">?????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">??????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row justify-content-center">
                        <div class="col-md-6">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">??????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">?????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>??????m</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">???????????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row justify-content-center">
                        <div class="col-md-6">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">???????????????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">?????????????????? Adobe Acrobat ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                           <div class="card_wrap text-left">
                              <div class="card_header">
                                 <div class="user">
                                    <div class="user_img">
                                       <img src="assets/images/face2.jpg" alt="">
                                    </div>
                                    <div>
                                       <h4 class="user_name mbr-fonts-style display-7"><strong>?????????</strong></h4>
                                       <h5 class="desk mbr-fonts-style display-7">??????</h5>
                                    </div>
                                 </div>
                                 <div class="rating">
                                    <div class="iconfont-wrapper">
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                       <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-star mobi-mbri" style="color: rgb(255, 107, 0); fill: rgb(255, 107, 0);"></span>
                                    </div>
                                 </div>
                              </div>
                              <p class="mbr-text mb-0 mbr-fonts-style align-left display-7">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


  
   </body>
</html>