<?php $session = \Config\Services::session();?>
<html>
   <head>
      <meta charset="utf-8" />
      <title>填鴨</title>
      <link rel="icon" type="image/png" href=
         <?php echo base_url('/images/filleasy_faviicon.png'); ?>
         sizes="16x16">
      <link href = /css/bootstrap/bootstrap.css rel="stylesheet" type="text/css">
      <link href = /css/Home/how_it_works.css rel="stylesheet" type="text/css">
      <link href = /css/headerstyle.css rel="stylesheet" type="text/css">
      <link href = /css/footerstyle.css rel="stylesheet" type="text/css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-KMPTNM8FK4"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-KMPTNM8FK4');
      </script>
   </head>
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init({
          duration: 800,
          delay: 400,
          disable: "mobile",
      });
   </script>
   <body>
      <div class = "bg--yellow">
      <div>
         <a href="/home/" imageanchor="1">
         <img src= "<?php echo base_url('/images/logo.png'); ?>" class = "logo"/>
         </a> 
         <ul class="header__items">
            <li class="header__item">
               <a href="/blog/" class="header__link">Blog</a>
            </li>
            <li class="header__item">
               <a href="/team/" class="header__link">About Us</a>
            </li>
            <li class="header__item">
               <form method='post' action='' id='form_lang' onchange="changelang('form_lang')">
                  <select name='lang' >
                     <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
                     <option value='tc' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'tc'){ echo "selected"; } ?> >繁體</option>
                  </select>
               </form>
            </li>
         </ul>
      </div>
      <div class = "bg--white" style = "background-color:white">
      <h1 class = "header__3">Finding the correct form has never been easier</h1>
      <h3 class = "subheader__3">Simply select all the Companies you're using with a click of a button </h3>
      <div class="flex-grid-app-explain" >
         <div class = 'intro'> 
            <img class = 'intro_image' src= "<?php echo base_url('/images/seekingduck.png'); ?>" alt="" />
         </div>
      </div>
      <div class = 'steps'>
         <h1 class = 'stepstext' data-aos="fade-down">1</h1>
      </div>
      <div class = 'stepboxtext' data-aos="fade-down">
         <h1 class = "header__3">All forms in HK - gathered in one place</h1>
         <ul class="live type2">
            <li>Forms ranging from Banking, Insurance, MPF, Tax and all other Companies where you save your personal data</li>
            <li>Fully digitised and ready for you to fill in</li>
         </ul>
      </div>
      <div class = 'svg-line-div'>
         <svg width="300" height="200">
            <line x1="50" y1="10" x2="50" y2="1000"  style="stroke: #2a299e; fill:none;
               stroke-width: 6px;
               stroke-dasharray: 10 5 5 5"></line>
         </svg>
      </div>
      <div class = 'steps'>
         <h1 class = 'stepstext' data-aos="fade-down">2</h1>
      </div>
      <div class = 'stepboxtext' data-aos="fade-down">
         <h1 class = "header__3" data-aos="fade-down">Chatbot AI to help you find the right forms</h1>
         <ul class="live type2">
            <li>Trained AI Chatbot to help you with deal with forms</li>
            <li>Coming soon!</li>
         </ul>
      </div>
      <div class = 'svg-line-div'>
         <svg width="300" height="200">
            <line x1="050" y1="10" x2="50" y2="1000"  style="stroke: #2a299e; fill:none;
               stroke-width: 6px;
               stroke-dasharray: 10 5 5 5"></line>
         </svg>
      </div>
      <div class = 'steps'>
         <h1 class = 'stepstext' data-aos="fade-down">3</h1>
      </div>
      <div class = 'stepboxtext' data-aos="fade-down">
         <h1 class = "header__3">Search by Company and Industry</h1>
         <ul class="live type2">
            <li>Forms from over 100+ different Companies in Hong Kong!</li>
            <li>Organized by name and Industry!</li>
         </ul>
      </div>
   </body>
   <div class = "wave" style = "margin-top:150px;">
      <img src= "<?php echo base_url('/images/wave-2.png'); ?>" style=" width:100%;height:150px; margin-top:-50px;"/>
   </div>
   <footer class="footer">
      <img src="<?php echo base_url('/images/logo.png'); ?>" class="logo" />
      <ul class="footer__items>
         <li class="footer__item">
         <a href="/aboutus/" class="footer__link">About us</a>
         </li>
         <li class="footer__item">
            <a href="/Blog/" class="footer__link">Blog</a>
         </li>
         <li class="footer__item">
            <a href="/contactus/" class="footer__link">Contact Us</a>
         </li>
         <li class="footer__item">
            <a href="/privacypolicy/" class="footer__link">Privacy Policy</a>
         </li>
      </ul>
   </footer>
   <script>
      AOS.init();
   </script>
</html>