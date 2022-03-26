<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="icon" type="image/png" href= <?php echo base_url('/images/filleasy_faviicon.png'); ?> sizes="16x16">
  <meta name="description" content="">
  
  
  <title>下載</title>
  <link rel="stylesheet" href="/assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="/assets/Material-Design-Icons/css/material.css">
  <link rel="stylesheet" href="/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/assets/animatecss/animate.css">
  <link rel="stylesheet" href="/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="/assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap"></noscript>
  <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href = /css/Forms/formdownload.css rel="stylesheet" type="text/css">
  
  
  
  
  

</head>
<body>
  <?php echo view('admin/header_tc'); ?>
 

<section class="header1 cid-sR9LGStgtF" id="header1-3v">

    

     
    <div class="align-left container">
        <div class="row content-wrap">
            <div class="mbr-black col-lg-5 col-md-12 py-lg-0 mbr-z-index20 pt-2">
                <div class="card-wrap">
                    <h1 class="mbr-section-title align-center mbr-fonts-style fade-in-up mb-0 mbr-bold display-1">謝謝您的信任！</h1>
                    <h3 class="mbr-section-subtitle align-center mbr-fonts-style fade-in-up mt-4 mb-0 display-4">立即下載您所需要的表格</h3>
                    <div class="mbr-section-btn align-center fade-in-up"><a class="btn btn-md btn-success display-7" href=<?php echo base_url('/itext/allforms')?>>全部下載</a> <a class="btn btn-md btn-success-outline display-7" href="<?php echo base_url('/serviceline/formsubmitted-chooseservice');?>" >瀏覽所有</a></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 py-lg-0 pb-4">
                <div class="img-wrap">
                    <img src="/assets/images/4-1050x700.jpg" alt="">
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="features6 cid-sR9H1dotRv" id="features6-3r">
    
    
    

    
    <div class="container">
        <div class="row justify-content-center">
                            <div class="col-12 pb-5">
                <h2 class="mbr-section-title mbr-fonts-style align-center mbr-bold display-5">瀏覽所有表格</h2>
            </div>
        
        <?php foreach ($forms as $i => $v): ?>
        <?php $_SESSION['iterator'] = $i; ?>
        

            
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper card-wrapper-1">
                    <div class="card-box align-left">
                        <h6 class="card-title mbr-fonts-style mbr-bold display-5"><?php echo  $dict[$v]; ?></h6>
                        
                                            <div class="mbr-section-btn second-btn mb-0 mt-4"><a class="btn btn-md btn-warning display-4" href="<?php echo base_url('/itext/'.$i);?>">下載</a></div>
                    </div>
                </div>
            </div>
            
<?php endforeach; ?>




            
            
            
        </div>
    </div>
</section>

<


<section class="footer1 cid-sR54PqA4Np" once="footers" id="footer01-3j">
    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">首頁</li><li class="foot-menu-item mbr-fonts-style display-7">關於我們</li><li class="foot-menu-item mbr-fonts-style display-7">服務包括</li><li class="foot-menu-item mbr-fonts-style display-7">常見問題</li><li class="foot-menu-item mbr-fonts-style display-7">聯絡我們</li></ul>
            </div>
            
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright Filleasy 填鴨 - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


<script src="/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="/assets/popper/popper.min.js"></script>
  <script src="/assets/tether/tether.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="/assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="/assets/dropdown/js/nav-dropdown.js"></script>
  <script src="/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="/assets/theme/js/script.js"></script>
  
  
  
  <input name="animation" type="hidden">
  
</body>
</html>