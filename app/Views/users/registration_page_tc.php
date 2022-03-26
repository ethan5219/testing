
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
      <title>Member Register</title>
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
      <link rel="stylesheet" href="/css/Validation/formValidation.min.css">
      <link rel="stylesheet" href="/css/Users/registration.css">
   </head>
   <body>
      <?php echo view('admin/header_tc'); ?>
      <section data-bs-version="5.1" class="form1 cid-sXGrCvUYr1" id="form1-6g">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-12 col-lg-6">
                  <div class="right-side">
                     <h5 class="mbr-section-title mbr-fonts-style display-5"><strong>Create Account</strong></h5>
                     <p class="mbr-text mbr-fonts-style display-4">
              		Convenience awaits. One central location to handle all your form filling needs.
                     </p>
                     <p class="listen mbr-fonts-style display-7">Follow us on:</p>
                     <div class="mbr-social-likes big">
                                             <span class="btn btn-social twitter socicon-bg-twitter mx-2" style="background-color:#DE1B85;">
                        <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </span>
                        <span class="btn btn-social socicon-bg-youtube youtube mx-2" style="background-color:#0077b5">
                        <span class="mbr-iconfont socicon-linkedin socicon" ></span>
                        </span>
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" style="background-color:#4267B2">
                        <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </span>

                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="left-side">
                     <div class="shadow">
                        <div class="col-auto form-part">
                           <div class="mbr-form top" data-form-type="formoid">
                              <!--Formbuilder Form-->
                              <form action="register-post" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name" id = 'registrationForm' name = 'registrationForm'>
                                
                                 <div class="row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> Oops...! some problem!</div>
                                 </div>
                                 <div class="dragArea row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                       <h5 class="mbr-fonts-style display-5"><strong>Register</strong></h5>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                       <p class="mbr-fonts-style display-7">Already a member?&nbsp;<a href="Filleasysignin.html" class="text-primary"><strong><em>Sign in!</em></strong></a></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                       <hr>
                                    </div>
                                    <div data-for="Username" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                       <input type="text" name="username" placeholder="Username"  class="form-control display-7" required="required" value="" id="Username-form1-6g">
                                       <?php        if(isset($username)): ?>
                                       <div class="col-lg-12 col-md-12 col-sm-12" style = "color:red; margin-top : -30px; margin-bottom: 20px; margin-left: 10px;">
                                          <h6> <?php   echo $username?></h6>
                                       </div>
                                       <?php endif;?>
                                    </div>
                                    <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group ">
                                       <input type="text" name="email" placeholder="Email" class="form-control display-7" id="Username-form1-6g">
                                       <?php        if(isset($email)): ?>
                                       <div class="col-lg-12 col-md-12 col-sm-12" style = "color:red; margin-top : -30px; margin-bottom: 20px; margin-left: 10px;">
                                          <h6> <?php   echo $email?></h6>
                                       </div>
                                       <?php endif;?>
                                    </div>
                                    <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                       <input type="password" name="password_1" placeholder="Password" data-form-field="password" required="required" class="form-control display-7" value="" id="password-form1-6g">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="Confirmed password">
                                       <input type="password" name="password_2" placeholder="Confirmed password" data-form-field="Confirmed password" required="required" class="form-control display-7" value="" id="Confirmed password-form1-6g">
                                    </div>
                                    <div class="col">
                                       <button type="submit" class="w-100 w-100 w-100 w-100 w-100 w-100 w-100 w-100 w-100 btn btn-primary display-4">Register</button>
                                    </div>
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
      <script src="/assets/web/assets/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

      <script src="/js/Site_JS/Validation/FormValidation.full.min.js"></script>
            <script src="/js/Site_JS/Validation/PasswordStrength.min.js"></script>
                        
      <script type="text/javascript" src="/js/User_profiles/registration.js"></script>
      <input name="animation" type="hidden">
   </body>
</html>