(function() {
  // The width and height of the captured photo. We will set the
  // width to the value defined here, but the height will be
  // calculated based on the aspect ratio of the input stream.




  // |streaming| indicates whether or not we're currently streaming
  // video from the camera. Obviously, we start at false.

  var streaming = false;

  // The various HTML elements we need to configure or control. These
  // will be set by the startup() function.

  var video = null;
  var canvas = null;
  var photo = null;
  var startbutton = null;

  function startup() {
    video = document.getElementById('video');
    canvas = document.getElementById('canvas');
    photo = document.getElementById('photo');
    startbutton = document.getElementById('startbutton');


    navigator.mediaDevices.getUserMedia({video: true, audio: false})
    .then(function(stream) {
      video.srcObject = stream;
      video.play();
    })
    .catch(function(err) {
      console.log("An error occurred: " + err);
    });

    video.addEventListener('canplay', function(ev){
      if (!streaming) {
        height = video.videoHeight / (video.videoWidth/width);
      
        // Firefox currently has a bug where the height can't be read from
        // the video, so we will make assumptions if this happens.
      
        if (isNaN(height)) {
          height = width / (4/3);
        }
      
        video.setAttribute('width', width);
        video.setAttribute('height', height);
        canvas.setAttribute('width', width);
        canvas.setAttribute('height', height);
        streaming = true;
      }
    }, false);
    
    
    

    startbutton.addEventListener('click', function(ev){
      takepicture();
      ev.preventDefault();
    }, false);

  }

  // Fill the photo with an indication that none has been
  // captured.

 
  function takepicture() {
    var context = canvas.getContext('2d');
    if (width && height) {
      canvas.width = width;
      canvas.height = height;
      context.drawImage(video, 0, 0, width, height);
    
      var data = canvas.toDataURL('image/png');
      data.download = 'download.png';
    } 
  }

  // Set up our event listener to run the startup process
  // once loading is complete.
  window.addEventListener('load', startup, false);
})(); 

 function takepicture() {
    var context = canvas.getContext('2d');

      canvas.width = screen.width*0.9;
      canvas.height = screen.height*0.9;

      context.drawImage(video,video.videoWidth/2 - screen.width/2 + screen.width *0.1, video.videoHeight/2 - screen.height/2 + screen.height*0.1,  screen.width *0.9, screen.height*0.9, 0, 0, screen.width, screen.height);
      var a = document.createElement('a');
    //a.href = canvas.toDataURL("image/png");
    //a.download = 'download.png';
    //a.click();

    data = canvas.toDataURL("image/jpg");
	var formData = data;
	var id = Date.now();
	
    $.ajax({
        type:'POST',
        url: 'https://d1453chgc3ec0f.cloudfront.net/formscanner',
        data:{'data': formData, 'hash': id},
       
        success:function(data){
            console.log("success");
            console.log(data);
			alert(data)
        },
        error: function(data){
            console.log("error");
            console.log(data);
        }
    });


  }