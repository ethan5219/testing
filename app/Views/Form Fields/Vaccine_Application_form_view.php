<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>Vaccine Form Filling</title>

</head>

<link href = /css/bootstrap/bootstrap.css rel="stylesheet" type="text/css">
<link href = /css/footerstyle.css rel="stylesheet" type="text/css">
<link href = /css/headerstyle.css rel="stylesheet" type="text/css">
<link href = /css/form.css rel="stylesheet" type="text/css">
<link rel="stylesheet" id="cf7cf-style-css" href="/css/formfield.css" type="text/css" media="all">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href = /css/form.css rel="stylesheet" type="text/css">


<div class = "bg--yellow">
<div>

<img src= "<?php echo base_url('/images/logo.png'); ?>" style=" width:100px;height:auto; margin-top:10px; margin-left:10px;"/> 
<ul class="header__items">
      
      <li class="header__item">
        <a href="/blog/" class="header__link">Blog</a>
      </li>
      
      <li class="header__item">
        <a href="/gallery/" class="header__link">Gallery</a>
      </li>
      
      <li class="header__item">
        <a href="/plans/" class="header__link">Plans</a>
      </li>
      
      <li class="header__item">
        <a href="https://learn.siteleaf.com" class="header__link">Learn</a>
      </li>
      
      <li class="header__item">
        <a href="https://manage.siteleaf.com" class="header__link">Log in</a>
      </li>
      +0
      <li class="header__item">
        <a href="https://manage.siteleaf.com/signup" class="header__link header__link--button">Sign up</a>
      </li>

    </ul>
</div>
    
<div class = "landing-page-head">
<h1 class="header__title" fontweight = 500>自动抽獎.</h1>
<h2 class="header__subtitle"> 2019冠狀病毒病疫苗</h2>
</div>


</div>

<div class="container">
    <div class="wrapper">
    <form id="vaccineform" onsubmit="processForm()" action="/serviceline/vaccineapplication/submitform" method="post">
        <div class = "form-wrapper">
        
        <fieldset class="section is-active">
        
        <h4 class='header-form-text'> Fill in your Personal Details</h4>
        
        <div class = "group-textbox-child">
        <h3 class = 'text-field-header'>HKID</h3>
        
        <label class="text-field">
        <input type= 'text'
        name = "ID" 
        id = "ID"
        placeholder = "Your HKID here" />
        </div>
        
        <div class = "form-wrapper">
        <div class = "group-textbox-child">
		<h3 class = 'text-field-header'>Email Address</h3>
        
        <label class="text-field">
        <input type= 'text'
        name = "Email Address" 
        id = "Email Address" 
        placeholder = "Your Email Address here" />
        </label>
      	
        <div class = "form-wrapper">
        <div class = "group-textbox-child">
		<h3 class = 'text-field-header'>Phone Number</h3>
        
        <label class="text-field">
        <input type= 'text'
        name = "Phone Number" 
        id = "Phone Number"
        placeholder = "Your Phone Number here" />
        </label>
        
        <input class="submit button" type="submit" value="Sign Up">
        
        
        
         </fieldset>  

</div>
</form>
</div>

</div>
</div>
</body>



</footer>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type = 'text/javascript' src ='/js/Site_JS/jsencrypt.min.js'></script>
<script type = 'text/javascript' src ='/js/Site_JS/Vaccine_application.js'></script>
<script type="text/javascript"></script>
