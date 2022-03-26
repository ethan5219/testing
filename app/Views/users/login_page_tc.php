<!DOCTYPE html>
<html  >
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="icon" type="image/png" href=
         <?php echo base_url('/images/filleasy_faviicon.png'); ?>
         sizes="16x16">
      <meta name="description" content="">
      <title>Member SignIn</title>
      <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
      <link rel="stylesheet" href="assets/Material-Design-Icons/css/material.css">
      <link rel="stylesheet" href="assets/tether/tether.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="assets/animatecss/animate.css">
      <link rel="stylesheet" href="assets/dropdown/css/style.css">
      <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
      <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
      <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
      <link rel="stylesheet" href="assets/socicon/css/styles.css">
      <link rel="stylesheet" href="assets/theme/css/style.css">
      <link rel="stylesheet" href="assets/recaptcha.css">
      <link rel="preload" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap">
      </noscript>
      <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
      <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
   </head>
   <body>
      <?php echo view('admin/header_tc'); ?>
      <section data-bs-version="5.1" class="form2 cid-sXFORqa9f4" id="form2-6a">
         <div class="container">
            <div class="row main">
               <div class="col-12 col-lg-6">
                  <div class="left-side">
                     <h4 class="card-heading mbr-fonts-style mbr-section-title display-5"><strong>Hey, Welcome Back!</strong></h4>
                     <h4 class="text mbr-fonts-style mbr-section-title display-4">Feel at ease with Fill Easy. Handle moving house, opening a bank account and more in one central place.
                     </h4>
      
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="right-side">
                     <div class="shadow">
                        <div class="col-auto form-part">
                           <p class="card-title mbr-fonts-style display-5"><strong>Sign In</strong><br>
                           </p>
                           <p class="card-text mbr-fonts-style display-7">New to Fill Easy?<strong><em><a href="/register" class="text-primary"><b><i>&nbsp;</i></b><i><b>Register!</b></i></a></em></strong><br></p>
                           <div class="line1"></div>
                           <div class="mbr-form top" data-form-type="formoid">
                              <!--Formbuilder Form-->
                              <form action="/login-post/" method="post" class="mbr-form form-with-styler" data-form-title="Form Name">
                               
                                 <div class="form-row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Welcome!</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> Oops...! some problem!</div>
                                 </div>
                                 <div class="dragArea form-row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                                       <input type="username" name="username" placeholder="Username" data-form-field="email" required="required" class="form-control display-7" value="" id="email-form2-6a">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="password">
                                       <input type="password" name="password" placeholder="Password" data-form-field="password" required="required" class="form-control display-7" value="" id="password-form2-6a">
                                       
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group manual_animate" data-for="password" style = "color:red">
                                       <h6><?php echo $message?></h6>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="">
                                       <p class="mbr-fonts-style display-7"><a href="contactus.html" class="text-primary">Forgot Password?</a></p>
                                    </div>
                                    <div class="col-auto" style=""><button type="submit" class="w-100 w-100 w-100 w-100 w-100 btn btn-primary display-4">Continue</button></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="">
                                       <hr>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                       <p class="mbr-fonts-style display-7">Or sign in using :</p>
                                    </div>
                                    <div class="col-auto" style=""><button type="submit" class="w-100 w-100 w-100 w-100 w-100 btn btn-secondary display-4">iAM Smart</button></div>
                                 </div>
                              </form>
                              <!--Formbuilder Form-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <input name="animation" type="hidden">
   </body>
</html>