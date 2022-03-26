<!DOCTYPE html>
<html  >
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="icon" type="image/png" href= <?php echo base_url('/images/filleasy_faviicon.png'); ?> sizes="16x16">
      <meta name="description" content="">
      <title>Choose account</title>
      <link rel="stylesheet" href="/assets/web//assets/mobirise-icons2/mobirise2.css">
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
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap">
      </noscript>
      <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
      <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
            <link rel="stylesheet" href="/css/Forms/servicelineform.css">
   </head>
<body>
  
     
<?php echo view('admin/header'); ?>
<section class="features1 cid-sQp7HEA7wS" id="features1-2h">
    

    
    
    <div class="container">
        
        
            <div class="media-container-row">
                <div class="card align-center col-12 col-md-3 col-lg-3">
                    <div class="panel-item">
                         <div class="card-text align-center">
                            <h3 class="count mbr-fonts-style align-center mbr-bold mb-0 display-4"> 1</h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style mb-0 display-7">Choose your Service</h4>
                           
                        </div>
                    </div>
                </div>


                <div class="card align-center col-12 col-md-3 col-lg-3">
                    <div class="panel-item">
                        <div class="card-text">
                            <h3 class="active-bubble count mbr-fonts-style mbr-bold mb-0 display-4">
                                2</h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style mbr-bold mb-0 display-7">Choose your Companies</h4>
                              <div class="line-through"> </div>
                        </div>
                    </div>
                </div>

                <div class="card align-center col-12 col-md-3 col-lg-3">
                    <div class="panel-item">
                        <div class="card-text">
                            <h3 class="count mbr-fonts-style mbr-bold mb-0 display-4">3</h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style mb-0 display-7">Fill in</h4>
                              <div class="line-through"> </div>
                        </div>
                    </div>
                </div>


                <div class="card align-center col-12 col-md-3 col-lg-3">
                    <div class="panel-item">
                        <div class="card-text">
                            <h3 class="count mbr-fonts-style mbr-bold mb-0 display-4">
                                4</h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style mb-0 display-7">Finished!</h4>
                              <div class="line-through"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<section class="content6 cid-sQXPmRckkj" id="content6-39">

    

    
    <div class="container align-center">
        <div class="row justify-content-center">
            <div class="media-container-column col-md-10">
                <h1 class="mbr-section-title mbr-fonts-style mb-0 mbr-bold display-2">Select your Companies</h1>
                <p class="mbr-text mbr-fonts-style mb-0 display-4">Select the Companies you need a form for!&nbsp;</p>
                 
   
            </div>
        </div>
    </div>
</section>
      <section class="tabs1 voyagem4_tabs1 tabs cid-sPEMO5a4EG" id="tabs1-28">
            <div class="media-container-row">
               <div class="col-12">
                  <ul class="nav nav-tabs" role="tablist">
                     <?php foreach ($companies as $k1 => $x1):
                        $i = 1;?>
                     <li class="nav-item" role="presentation"><a aria-controls="<?php echo "voyage1-tab".$i."-content".$i ?>" aria-selected="true" class="nav-link mbr-fonts-style show active display-4" data-toggle="tab" href="<?php echo "#tabs1-28_tab".$i ?>" role="tab"> <?php echo $k1; ?></a></li>
                     <?php 
                        $i = $i +1;
                        endforeach; ?>
                  </ul>
                  <form action="formfields" method="post" id = "compform">
                     <div class="tab-content">
                        <?php if (! empty($companies) && is_array($companies)) : ?>
                        <?php foreach ($companies as $k1 => $x1):
                           $i = 1;
                           ?>
                        <div aria-labelledby="<?php echo "voyage1-tab".$i ?>" class="tab-pane active" id="<?php echo "voyage1-tab".$i."-content" ?>" role="tabpanel">
                           <div class="row">
                              <?php foreach ($x1 as $k => $x): ?>
                              <input 
                                 class = "picture-checkbox-input"
                                 type="checkbox" 
                                 id = "<?php echo  $x['FormID']; ?>" 
                                 name ="<?php echo  $x['FormID']; ?>" 
                                 value ="<?php echo  $x['FormID'];?>" />
                              <label for= <?php echo $x['FormID']; ?> class="col-lg-6 col-12 card__wrap checkbox-overlay">
                                 <div class="card__image">
                                    <img alt="" src=<?php echo base_url("/images/logos/".$companies[$k1][$k]['CompID'].".png"); ?> title="">
                                 </div>
                                 <div class="card__content">
                                    <h5 class="card__title mbr-fonts-style display-7">
          
                                       <div><?php echo $x['Compname']; ?></div>
                                    </h5>
                                 </div>
                              </label>
                              <?php endforeach; 
                                 $i = $i + 1;?>
                           </div>
                        </div>
                        <?php endforeach; ?>
                        
                                       <?php foreach($serviceline as $value): ?>
               <?php echo '<input type="hidden" name="Serviceline[]" value="'. $value. '">'; ?>
               <?php endforeach; ?>
                  </form>
                  <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="info2 businessm4_info2 cid-sPN7O0Nbc9" id="info2-2a" style = "margin-bottom:100px">
         <div class="container align-left">
            <div class="row justify-content-center">
               <div class="media-container-column mbr-white col-md-10 col-lg-8">
                  <div class="mbr-section-btn align-center pt-3">
                  	 <a class="btn btn-md btn-warning display-4" href="<?php echo base_url('/serviceline/formsubmitted-chooseservice'); ?>">BACK</a> 
                     <a class="btn btn-md btn-black-outline display-4" href="#" onclick="document.getElementById('compform').submit()">NEXT</a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <script src="/js/Admin_JS/lang_change.js"></script>

   </body>
</html>