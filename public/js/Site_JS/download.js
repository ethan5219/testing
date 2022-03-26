function toSubmit(ele){
	return false
}

function ajax(ele){
	
    var id = ele.id;
	var url = window.location.origin.concat('/itext');
	$.ajax({
	  url: window.location.origin.concat('/itext'),
	  type: "get", //send it through get method
	  data: { 
	    formid: id, 
	  },
	  success: function(data) {
		alert(data)
	  },
	  error: function(xhr) {
		alert(url)
	}
	}
	)
}