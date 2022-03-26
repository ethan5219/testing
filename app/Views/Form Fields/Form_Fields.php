<!DOCTYPE html>
<?php $i = 0;
   $formfieldname = '';
   $forminputtype = '';
   $formchoices = '';
   $sentencedescription = '';?> 
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <meta name="description" content="">
      <title>Fill in your Form!</title>
    <link rel="icon" type="image/png" href= <?php echo base_url('/images/filleasy_faviicon.png'); ?> sizes="16x16">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="/assets/web/assets/mobirise-icons2/mobirise2.css">
      <link rel="stylesheet" href="/assets/Material-Design-Icons/css/material.css">
      <link rel="stylesheet" href="/assets/tether/tether.min.css">
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="/assets/animatecss/animate.css">
      <link rel="stylesheet" href="/assets/dropdown/css/style.css">
      <link rel="stylesheet" href="/assets/formstyler/jquery.formstyler.css">
      <link rel="stylesheet" href="/assets/formstyler/jquery.formstyler.theme.css">
      <link rel="stylesheet" href="/assets/datepicker/jquery.datetimepicker.min.css">
      <link rel="stylesheet" href="/assets/socicon/css/styles.css">
      <link rel="stylesheet" href="/assets/theme/css/style.css">
      <link rel="stylesheet" href="/assets/recaptcha.css">
      <link rel="stylesheet" href="/css/Validation/formValidation.min.css">
      
      <link rel="preload" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap">
      </noscript>
      <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css">
      <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
      <link rel="stylesheet" href = /css/Forms/Formfields.css rel="stylesheet" type="text/css">
   </head>
   <body>
   <?php echo view('admin/header'); ?>
    
      <section class="features1 cid-sQp7KVpCTs" id="features1-2j">
         <div class="container">
            <div class="media-container-row">
               <div class="card align-center col-12 col-md-3 col-lg-3">
                  <div class="panel-item">
                     <div class="card-text align-center">
                        <h3 class="count mbr-fonts-style align-center mbr-bold mb-0 display-4"> 1</h3>
                        <h4 class="mbr-content-title mbr-bold mbr-fonts-style mb-0 display-7">Choose your service</h4>
                     </div>
                  </div>
               </div>
               <div class="card align-center col-12 col-md-3 col-lg-3">
                  <div class="panel-item">
                     <div class="card-text">
                        <h3 class="count mbr-fonts-style mbr-bold mb-0 display-4">
                           2
                        </h3>
                        <h4 class="mbr-content-title mbr-bold mbr-fonts-style mbr-bold mb-0 display-7">Choose your Companies</h4>
                        <div class="line-through"> </div>
                     </div>
                  </div>
               </div>
               <div class="card align-center col-12 col-md-3 col-lg-3">
                  <div class="panel-item">
                     <div class="card-text">
                        <h3 class="active-bubble count mbr-fonts-style mbr-bold mb-0 display-4">3</h3>
                        <h4 class="mbr-content-title mbr-bold mbr-fonts-style mb-0 display-7">Fill in</h4>
                        <div class="line-through"> </div>
                     </div>
                  </div>
               </div>
               <div class="card align-center col-12 col-md-3 col-lg-3">
                  <div class="panel-item">
                     <div class="card-text">
                        <h3 class="count mbr-fonts-style mbr-bold mb-0 display-4">
                           4
                        </h3>
                        <h4 class="mbr-content-title mbr-bold mbr-fonts-style mb-0 display-7">Finished!</h4>
                        <div class="line-through"> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php $i = 0;
         $formfieldname = '';
         $forminputtype = '';
         $formchoices = '';
         ?> 
      <section class="tabs1 voyagem4_tabs1 tabs cid-sR57J8wO4s" id="tabs1-38">
         <div class="container">
            <div class="media-container-row">
               <div class="col-12">
                  <ul class="nav nav-tabs" role="tablist">
                     <?php foreach ($formfields as $key => $x): ?>
                     <?php if ($key === array_key_first($formfields)): ?>
                     <?php $i = 1;?>
                     <li class="nav-item" role="presentation" style = "margin-top: 10px;"><a style="padding-bottom: 10px;" aria-controls="<?php echo "voyage1-tab".$i."-content"?>" aria-selected="true" class="nav-link mbr-fonts-style show active display-4" data-toggle="tab" href="<?php echo "#tabs1-38_tab".$i ?>" role="tab"><?php echo $key; ?></a></li>
                     <?php 
                        $i = $i +1;
                        
                        else: ?>
                     <li class="nav-item" role="presentation" style = "margin-top: 10px;"><a style="padding-bottom: 10px;" aria-controls="<?php echo "voyage1-tab".$i."-content"?>" aria-selected="true" class="nav-link mbr-fonts-style active display-4" data-toggle="tab" href="<?php echo "#tabs1-38_tab".$i ?>" role="tab"><?php echo $key; ?></a></li>
                     <?php
                        $i = $i +1;
                        endif ?> 
                     <?php endforeach; ?>
                     <li class="nav-item" role="presentation" style = "margin-top: 10px;"><a style="padding-bottom: 10px;" aria-controls="<?php echo "voyage1-tab".$i."-content"?>" aria-selected="true" class="nav-link mbr-fonts-style active display-4" data-toggle="tab" href="<?php echo "#tabs1-38_tab".$i ?>" role="tab">Finished!</a></li>
                  </ul>
                  <form action="generate-form" method="POST" class="mbr-form form-with-styler" data-form-title="Filleasy Form" id="metaform">
                     <div class="tab-content">
                        <?php $i2 = 1;?>
                        <?php foreach ($formfields as $key => $x): ?>
                        <div aria-labelledby="<?php echo "voyage1-tab".$i2 ?>" class="tab-pane active" id="<?php echo "voyage1-tab".$i2."-content" ?>" role="tabpanel" >
                           
                           <section class="form1 cid-sQpej5uJLM" id="form1-2w">
                              <div class="container">
                                 <div class="row justify-content-center">
                                    <div class="col-md-9 block-content">
                                       <!--Formbuilder Form-->
                                       <div class="form-row">
                                          <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                          <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> </div>
                                          <div class="dragArea form-row" style = "width:100%">
                                          <?php $i = 0?>
                                             <?php foreach ($x as $key2 => $value2): ?>
                                             <?php foreach ($value2 as $key3 => $value): ?>
                                             <?php
                                                if (($i == 0) or $i % 3 == 0)
                                                {
                                                    $formfieldname = $key3;
                                                    $sentencedescription = $value['sentence_description'];
                                                    $placeholder = $value['placeholder'];
                                                }
                                                
                                                if (($i == 1) or ($i - 1) % 3 == 0)
                                                {
                                                
                                                    $forminputtype = $value[0];
                                                }
                                                if (($i == 2) or ($i - 2) % 3 == 0)
                                                {
                                                    $formchoices = $value;
                                                    unset($formchoices['sentence_description']);
                                                }
                                                $i += 1
                                                ?>   
                                                 <?php
                                                if ($i % 3 == 0 && $formfieldname != 'Form ID'):
                                                
                                                
                                                
                                                if (stripos($sentencedescription, ' ') !== false):
                                                ?>
                                             <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="mbr-fonts-style display-7"><?php echo $sentencedescription ?></p>
                                             </div>
                                             <?php
                                                endif ?>
                                             <?php
                                                if ($forminputtype == 'CHECK BOXES'):
                                                ?>
                                             <div class="row">
                                                <div class="col-xs-12">
                                                   <div class="form-control-label">
                                                      <label class="mbr-fonts-style display-7"><strong><?php echo $formfieldname; ?></strong></label>
                                                   </div>
                                                   <div class="btn-group btn-group validation" data-toggle="buttons">
                                                      <label class="btn active" for = "<?php echo $formfieldname; ?>" id="Forms[][<?php echo $formfieldname; ?>]">
                                                      <input tabname="<?php echo "voyage1-tab".$i2 ?>" type="checkbox" name= "Forms[][<?php echo $formfieldname; ?>]" id = "Forms[][<?php echo $formfieldname; ?>]" value ="On" ><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> <?php echo $formfieldname; ?>                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <?php
                                                endif; 
                                                ?>
                                             <?php
                                                if ($forminputtype == 'RADIO BUTTONS'):
                                                ?>
                                             <div class="row">
                                                <div class="col-xs-12">
                                                   <div class="form-control-label">
                                                      <label class="mbr-fonts-style display-7"><strong><?php echo $formfieldname; ?></strong></label>
                                                   </div>
                                                   <div class="btn-group validation" data-toggle="buttons">
                                                      <?php foreach ($formchoices as $key => $x): if ($x !== ""):?>
                                                      <?php if ($key === array_key_first($formchoices)): ?>
                                                      <label class="btn active">
                                                      <input type="radio" name="Forms[][<?php echo $formfieldname; ?>]"  id = "<?php echo $x; ?>" value = "<?php echo $x; ?>"  ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span><?php echo " ".$x; ?></span>
                                                      </label>
                                                      <?php
                                                         else: ?>
                                                      <label class="btn">
                                                      <input type="radio" name="Forms[][<?php echo $formfieldname; ?>]" id = "<?php echo $x; ?>" value = "<?php echo $x; ?>"  ><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span><?php echo " ".$x; ?></span>
                                                      </label>
                                                      <?php
                                                         endif ?> 
                                                      <?php
                                                         endif; 
                                                         endforeach;
                                                         ?>
                                                   </div>
                                                </div>
                                             </div>
                                             <?php
                                                endif;    ?>
                                             <?php
                                                if ($forminputtype == 'TEXT FIELD'):
                                                ?>
                                             <?php
                                                if ($formfieldname == 'Account Number' or $formfieldname == 'Policy Number'):
                                                ?>
                                             <?php foreach ($accountnocompname[$formfieldname] as $k => $v): ?>
                                             <div data-for="<?php echo $formfieldname; ?>" class="col-lg-6 col-md-12 col-sm-12 form-group validation">
                                                <label id="Forms[][<?php echo $formfieldname; ?>]" for="Forms[][<?php echo $formfieldname; ?>]" class="form-control-label mbr-fonts-style display-7"><strong><?php echo $k . " " . $formfieldname ?></strong></label>
                                                <input type="text" name="Forms[][<?php echo $v . "+" . $formfieldname; ?>]"   data-form-field="<?php echo $formfieldname; ?>" class="form-control display-7" value="" id="<?php echo $v . "+" . $formfieldname; ?>"
                                                   <?php if ($placeholder != ''): ?>
                                                   placeholder = "<?php echo $placeholder; ?>" />
                                                <?php
                                                   else: ?> 
                                                placeholder = "<?php echo $formfieldname; ?>" />
                                                <?php
                                                   endif ?>
                                             </div>
                                             <?php
                                                endforeach; ?>   
                                             <?php
                                                else: ?>
                                             <div data-for="<?php echo $formfieldname; ?>" class="col-lg-6 col-md-12 col-sm-12 form-group validation">
                                                <label for="Forms[][<?php echo $formfieldname; ?>]" class="form-control-label mbr-fonts-style display-7"><strong><?php echo $formfieldname; ?></strong></label>
                                                <input tabname="<?php echo "voyage1-tab".$i2 ?>" type="text" id="Forms[][<?php echo $formfieldname; ?>]" name="Forms[][<?php echo $formfieldname; ?>]"  data-form-field="<?php echo $formfieldname; ?>" class="form-control display-7" value="" id="<?php echo $formfieldname; ?>"
                                                   <?php if ($placeholder != ''): ?>
                                                   placeholder = "<?php echo $placeholder; ?>" />
                                                <?php
                                                   else: ?> 
                                                placeholder = "<?php echo $formfieldname; ?>" />
                                                <?php
                                                   endif ?>
                                             </div>
                                             <?php
                                                endif ?>
                                             <?php
                                                endif ?>
                                             <?php
                                                endif ?>
                                                
                                             <?php endforeach; ?>
                                             
                                             <?php endforeach; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <?php $i2 = $i2 + 1;?>
                        <?php endforeach; ?>
                        <div aria-labelledby="<?php echo "voyage1-tab".$i2 ?>" class="tab-pane active" id="<?php echo "voyage1-tab".$i2."-content" ?>" role="tabpanel">
                           <section class="info2 businessm4_info2 cid-sQCkUyCpyt" id="info2-34">
                              <div class="container align-left">
                                 <div class="row justify-content-center">
                                    <div class="media-container-column mbr-white col-md-10 col-lg-8">
                                       <div class="mbr-section-btn align-center pt-3">x
                                       <a class="btn-md btn-black-outline display-4" href="#">BACK</a> 
                                       <button id='submitbutton' class="btn-md btn-warning display-4" href="#" data-toggle="modal" data-bs-toggle="modal" data-target="#mbr-popup-33" data-bs-target="#mbr-popup-33" type='submit' onclick="validate()">SUBMIT</button></div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                  </form>
                  <!--Formbuilder Form-->
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
     
       <section class="info2 businessm4_info2 cid-sQCkUyCpyt" id="info2-34">
          <div class="container align-left">
             <div class="row justify-content-center next-button">
                <div class="media-container-column mbr-white col-md-10 col-lg-8">
                   <div class="mbr-section-btn align-center pt-3">
                   <a class="btn-md btn-black-outline display-4" href="#" onclick = "prevbutton()">BACK</a> 
                   <button id='nextbutton' class="btn-md btn-warning display-4" href="#" data-toggle="modal" data-bs-toggle="modal" data-target="#mbr-popup-33" data-bs-target="#mbr-popup-33" onclick = "nextbutton()" >NEXT</button></div>
                </div>
             </div>
          </div>
       </section>

      


      <script src="/assets/web/assets/jquery/jquery.min.js"></script>

      <script src="/js/Site_JS/Validation/FormValidation.full.min.js"></script>
      <script src="/js/Site_JS/Validation/Wizard.min.js"></script>
      <script src="/js/Admin_JS/lang_change.js"></script>
      <script src="/js/User_profiles/registration.js"></script>
      
      <input name="animation" type="hidden">
   </body>
</html>