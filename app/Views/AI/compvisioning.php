<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Scan to AI</title>

<style>

html, body {
  height: 100%;
  margin: 0px;  
}

.camera {
  width: 340px;
  display:inline-block;
}

.output {
  width: 340px;
  display:inline-block;
}

#startbutton {
  display:block;
  position:relative;
  margin-left:auto;
  margin-right:auto;
  bottom:32px;
  background-color: rgba(0, 150, 0, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.7);
  box-shadow: 0px 0px 1px 2px rgba(0, 0, 0, 0.2);
  font-size: 14px;
  font-family: "Lucida Grande", "Arial", sans-serif;
  color: rgba(255, 255, 255, 1.0);
}

.contentarea {
  font-size: 16px;
  font-family: "Lucida Grande", "Arial", sans-serif;
  width: 760px;
}
#take_photo_button, #return_button
{
	position: absolute;
	z-index: 500;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
	text-decoration: none;
	text-align: right;
    bottom: 0;
	right: 0px;
}
#take_photo_button
{
	
}
#return_button
{
	left: 0px;
	right: initial;
}

#take_photo_button > .fa-camera-retro:after {
  content: "";
  background: #90EE90;
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  width:100%;
  height: 100%;
  opacity: 0;
  transition: all 0.8s;
  border-radius: 50%;
}

#take_photo_button > .fa-camera-retro:active:after {
  padding: 0;
  margin: 0;
  opacity: 0.9;
  transition: 0s
}

#take_photo_button > .fa-camera-retro
{
	position: relative;
	background: white;
	padding: 20px;
    border-radius: 50%;
	font-size: min(10vh, 15vw); ;
}


#example-scanning-overlay {
display: flex;
align-items: center;
justify-content: center;
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
background: transparent;
z-index: 2;
}
@media (min-aspect-ratio: 1/1) {
#example-scanning-overlay .inner {
width: 90%;
height: 80%;
}
}
@media (max-aspect-ratio: 1/1) {
#example-scanning-overlay .inner {
width: 90%;
height: 80%;
}
}

#example-scanning-overlay .inner {
display: flex;
align-items: center;
justify-content: center;
position: relative;

background:
linear-gradient(to right, white 10px, transparent 10px) 0 0,
linear-gradient(to right, white 10px, transparent 10px) 0 100%,
linear-gradient(to left, white 10px, transparent 10px) 100% 0,
linear-gradient(to left, white 10px, transparent 10px) 100% 100%,
linear-gradient(to bottom, white 10px, transparent 10px) 0 0,
linear-gradient(to bottom, white 10px, transparent 10px) 100% 0,
linear-gradient(to top, white 10px, transparent 10px) 0 100%,
linear-gradient(to top, white 10px, transparent 10px) 100% 100%;
background-repeat: no-repeat;
background-size: 40px 40px;
}

#example-scanning-overlay.hidden {
display: none;
}

#example-scanning-overlay img {
opacity: 1;
width: 100%;
height: auto;
align-self: center;
}

#example-scanning-overlay .inner .scanline {
position: absolute;
width: 100%;
height: 10px;
background: white;
animation: move 2s linear infinite;
}
@keyframes move {
0%, 100% { top: 0% }
50% { top: calc(100% - 10px) }
}



@keyframes slide {
  0% {
  transform:scale(100%);
  }
  100% {
  transform:scale(120%);
  }
}



.bring_to_front
{
  position: absolute;
  top: 0;
  left: 0;
  z-index: 99999;
}

.video-container {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  height: 100%; 
  overflow: hidden;
}

.video-container video {
  min-width: 100%; 
  min-height: 100%; 

  width: auto;
  height: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

</style>

<link rel="icon" type="image/png" href= <?php echo base_url('/images/filleasy_faviicon.png'); ?> sizes="16x16">
</head>

<body>

<div class="video-container">
	<div id="example-scanning-overlay" class="">
		<div class="inner">
			<img src="./images/AI/form.png">
			<div class="scanline"></div>
		</div>
	</div>
	
	  <canvas id="canvas">
  </canvas>
    <video id="video">Video stream not available.</video>
</div>

<div id="take_photo_button" onclick="console.log('aaaa');takepicture();">
	<img style="width: 15vw; margin-right: 2vw;" src="./images/AI/camera.png">
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/AI_JS/compvision.js"></script>
</body>
</html>
