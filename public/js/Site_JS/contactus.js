$(document).ready(function () {
  $("form").submit(function (event) {
		var base_url = window.location.origin;
	
    var formData = {
      Name: $("#Name").val(),
      Email: $("#Email").val(),
      Phone_number: $("#Phone_number").val(),
      Services: $("#Services").val(),
      Message: $("#Message").val(),
    };
console.log(formData);
    $.ajax({
      type: "POST",
      url: base_url + "/contact/post",
      data: formData,
      dataType: "json",
      encode: true,
    })  .done(function(data) {
    console.log(data)
  });
    event.preventDefault();
  });
});