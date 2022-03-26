
	function processForm() {
		
    var form = document.getElementById('vaccineform');//retrieve the form as a DOM element		
    var hkid = document.forms['vaccineform']["ID"].value.toUpperCase();
    var maskedHkid = hkid.substring(0, hkid.length - 4) + "****";
	
	//Henderson Public
    var hendersonpublicKey = `-----BEGIN PUBLIC KEY-----
    MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAstPqekAAPEWpz/MHtTmD
    2+QoxbHjV1wbvdbsmLku3tPkdGSkIwrAhDjIchN8V+j2NI9Q1N6FE7jKlmzpHcmu
    mRtZqkzhoVn1yPd0YIHVYxAckE5LOfBGc1G4m7vkAFBz0qnFYy99oc0Bt6xd5lEy
    id5t4IsRsLhkcI0YUs40iTYKbPfCsl4Vn/UMPRO9ldk2BSOp6JUZjF5tjjpD3Hex
    fXqZOhHXOMU5tUY/Jtvws63ob4y0EhIweZ/Zp8B3JnKYkhNQaZx3VqWtK1z/guWz
    hrxk9xLYOhZ33MBmRp9wT++AYPGiog9jS4+GelzbHoko/JkE+Mmw00tF4j920ILB
    MQIDAQAB
    -----END PUBLIC KEY-----`; // encrypt HKID

	var encrypt = new JSEncrypt();
	
	encrypt.setPublicKey(hendersonpublicKey);
	 
	var hendersonencrypt = encrypt.encrypt(hkid);
	
	var input = document.createElement('input');//prepare a new input DOM element
    input.setAttribute('name', 'hendersonencrypt');//set the param name
    input.setAttribute('value', hendersonencrypt);//set the value

    form.appendChild(input);//append the input to the form




	//Sino Public
    var sinopublicKey = `-----BEGIN PUBLIC KEY-----
    MIIBITANBgkqhkiG9w0BAQEFAAOCAQ4AMIIBCQKCAQBz+jc3bE/+eoRZDLi3oxgO
    UvJKSlKbbw3ljrs7DOpyGeA45NhqvZ8i+DJvisGpVHKNnQLxJStN0EU4hXcyg605
    wgI3NQbkX3Q4muCpmc+2cR9oplXE+EC2RxURPmtoyY2h5iTvbsVU9CjTfLwTuOu9
    Kow00CvI59kijGf022Tixn4AYgfFruAuloMY1QBfCVbaMvQavTHCv7Dnik8jrfOj
    5Dpkhnuz7QxkndFFJEQvpwoy6J+HCsMg8i2XaQVV+HDEhD/RbW5o6Bj3S+Y4h8wY
    iTksXNbMVGaSSIDI2HBDXV78GHtXX0Ze06dL5Qa7wkbBdY2tho0lqsC900wIfC1n
    AgMBAAE=
    -----END PUBLIC KEY-----`; // encrypt HKID

	encrypt.setPublicKey(sinopublicKey);

	var sinoencrypt = encrypt.encrypt(hkid);
	
	var input = document.createElement('input');//prepare a new input DOM element
    input.setAttribute('name', 'sinoencrypt');//set the param name
    input.setAttribute('value', sinoencrypt);//set the value

    form.appendChild(input);//append the input to the form

	
 	var hash = sha256(hkid.toUpperCase());

	var input = document.createElement('input');//prepare a new input DOM element
    input.setAttribute('name', 'IDhash');//set the param name
    input.setAttribute('value', hash);//set the value

    form.appendChild(input);//append the input to the form

	
	alert("The form was submitted");

    form.submit();//send with added input


    };

