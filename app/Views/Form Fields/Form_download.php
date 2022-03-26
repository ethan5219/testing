<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="icon" type="image/png" href= <?php echo base_url('/images/filleasy_faviicon.png'); ?> sizes="16x16">
  <meta name="description" content="">
  
  
  <title>Download</title>
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
  
  <?php echo view('admin/header'); ?>
 <section data-bs-version="5" class="menu menu1 cid-sQp7KUqz29" once="menu" id="menu01-2i">
         <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container-fluid">
               <div class="navbar-brand">
                  <span class="navbar-logo">
                  <a href="/home"><img src="/assets/images/logo-1-180x129.png" alt="FillEasy_logo" style="height: 4.1rem;"></a>
                  </span>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <div class="hamburger">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                     <li class="nav-item"><a class="nav-link link text-black text-primary display-7" href="/team" aria-expanded="false">
                        About</a>
                     </li>
                     <li class="nav-item"><a class="nav-link link text-black text-primary display-7" href="/team">FAQ<br></a>
                     </li>
                     <li class="nav-item"><a class="nav-link link text-black text-primary display-7" href="/serviceline/formsubmitted-chooseservice">Forms<br></a></li>
                     <li class="nav-item dropdown">
                                           <a class="nav-link link text-black dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                        <span class="mdi-action-language mbr-iconfont mbr-iconfont-btn"></span>繁中</a>
                        <div class="dropdown-menu">
                           <a class="text-black dropdown-item text-primary display-7" onclick = changelang('en') href='#'>ENGLISH</a>
                           <a class="text-black dropdown-item text-primary display-7" onclick = changelang('tc') href='#'>繁中</a>
                        </div>
                     </li>
                  </ul>
                  <div class="icons-menu">
                     <a class="iconfont-wrapper" href="index.html" target="_blank">
                     <span class="p-2 mbr-iconfont mdi-social-person"></span>
                     </a>
                     <a class="iconfont-wrapper" href="index.html" target="_blank">
                     <span class="p-2 mbr-iconfont mdi-communication-email"></span>
                     </a>
                  </div>
                  <div class="navbar-buttons align-right mbr-section-btn"><a class="btn btn-warning display-4" href="/serviceline/formsubmitted-chooseservice"><span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
                     Start!</a>
                  </div>
               </div>
            </div>
         </nav>
      </section>

<section class="header1 cid-sR9LGStgtF" id="header1-3v">

    

     
    <div class="align-left container">
        <div class="row content-wrap">
            <div class="mbr-black col-lg-5 col-md-12 py-lg-0 mbr-z-index20 pt-2">
                <div class="card-wrap">
                    <h1 class="mbr-section-title align-center mbr-fonts-style fade-in-up mb-0 mbr-bold display-1">Thanks for your trust!</h1>
                    <h3 class="mbr-section-subtitle align-center mbr-fonts-style fade-in-up mt-4 mb-0 display-4">Here you can download all forms oyu need.</h3>
                    <div class="mbr-section-btn align-center fade-in-up"><a class="btn btn-md btn-success display-7" href=<?php echo base_url('/itext/allforms')?>>Download All</a> <a class="btn btn-md btn-success-outline display-7" href="<?php echo base_url('/serviceline/formsubmitted-chooseservice');?>" >All forms</a></div>
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
                <h2 class="mbr-section-title mbr-fonts-style align-center mbr-bold display-5">All generated forms</h2>
            </div>
        
        <?php foreach ($forms as $i => $v): ?>
        <?php $_SESSION['iterator'] = $i; ?>
        

            
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper card-wrapper-1">
                    <div class="card-box align-left">
                        <h6 class="card-title mbr-fonts-style mbr-bold display-5"><?php echo  $dict[$v]; ?></h6>
                        
                                            <div class="mbr-section-btn second-btn mb-0 mt-4"><a class="btn btn-md btn-warning display-4" href="<?php echo base_url('/itext/'.$i);?>">Download</a></div>
                    </div>
                </div>
            </div>
            
<?php endforeach; ?>




            
            
            
        </div>
    </div>
</section>

<



  
  
  <input name="animation" type="hidden">
  
</body>
</html>