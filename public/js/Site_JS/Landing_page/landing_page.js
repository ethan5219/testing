var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];


function changelang(lang) {		
		$.ajax({
		  url: baseUrl + 'languagechange',
		  dataType:'json',
		  data: {'lang': lang},
		  headers:{'X-Requested-With':'XMLHttpRequest'},
 		  type: "POST",
		  error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}
		});
		
		location.reload();
}


