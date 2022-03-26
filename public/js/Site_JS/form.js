$(document).ready(function(){
//arr to contain wrong tabsw	
	arr = [];
	


	
	
var d = new Date();
var strDate = d.getDate() + "-" + (d.getMonth()+1) + "-" + d.getFullYear();
$("input[type='text'][name='Forms[][Date]']").val(strDate);
	

$(".prev_button").click(function(){
    var button = $(this);
    var currentSection = $(".is-active");
    var currentSectionIndex = currentSection.index();
	if (currentSectionIndex > 0) {
	    var headerSection = $('.steps li').eq(currentSectionIndex);
	    currentSection.removeClass("is-active").prev().addClass("is-active");
	    headerSection.removeClass("is-active").prev().addClass("is-active");
		$('.bg--white').css("flex-basis", currentSection.prev().height() + 200);
		$('html, body').animate({scrollTop: '0px'}, 500);
		set_heights()
    }

  });



});  

$('input[type=radio]').change(function(ele) {
	$(this).parent().addClass("active");


});  

function nextbutton() {
	
	var currenttab = $('.nav-link.display-4.active');
	

	
	currenttab.removeClass("active");
	currenttab.parent().next().find('.nav-link.display-4').addClass("active");	
	
	var currenttabcontent = $('.tab-pane.active');
	currenttabcontent.removeClass("active");
	currenttabcontent.next().addClass("active");
	
	if (currenttab.parent().is(".nav-item:last-child")) {
		currenttab.addClass("active");
		currenttabcontent.addClass("active");
		fv.validate();
	}
	
	if (currenttab.parent().is(".nav-item:nth-last-child(2)")) {
		fv.validate();
		fv.validate();
	}
	$("html, body").animate({ scrollTop: 0 }, "slow");
	

	
}

function prevbutton() {
	var currenttab = $('.nav-link.display-4.active');
	currenttab.removeClass("active");
	currenttab.parent().prev().find('.nav-link.display-4').addClass("active");
	
	var currenttabcontent = $('.tab-pane.active');
	currenttabcontent.removeClass("active");
	currenttabcontent.prev().addClass("active");
	
		if (currenttab.parent().is(".nav-item:first-child")) {
		currenttab.addClass("active");
		currenttabcontent.addClass("active");
	}
	$("html, body").animate({ scrollTop: 0 }, "slow");
}


function submit() {
	document.getElementById('next_button').click();
}
function submit() {
	document.getElementById('next_button').click();
}


const form = document.getElementById('metaform');
const fv = FormValidation.formValidation(
        document.getElementById('metaform'),
        {
            fields: {
				//mandatory areas
			    "Forms[][Date]": {
                    validators: {
                        notEmpty: {
                        message: 'The Date is required'
                        },
                        date: {
                            format: 'DD-MM-YYYY',
                            message: 'The value is not a valid date',
                        },
                    }
                },
                "Forms[][English Surname]": {
                    validators: {
                        notEmpty: {
                            message: 'The English Surname is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The English Surname can only consist of alphabetical letters'
                        }
                    }
                },
                "Forms[][English Given Name]": {
                    validators: {
                        notEmpty: {
                            message: 'The English Given Name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The English Forename can only consist of alphabetical letters'
                        }
                    }
                },

		        "Forms[][Account Surname (If Different to Current Name)]": {
		                    validators: {
		                        regexp: {
		                            regexp: /^[a-zA-Z ]+$/,
		                            message: 'The English Surname can only consist of alphabetical letters'
		                        }
		                    }
		                },
		        "Forms[][Account English Forename  (If Different to Current Name)]": {
		                    validators: {
		                        regexp: {
		                            regexp: /^[a-zA-Z ]+$/,
		                            message: 'The English Surname can only consist of alphabetical letters'
                        }
                    }
                },

                'Forms[][Nationality]': {
                    validators: {
                 		 notEmpty: {
                            message: 'Nationality is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Nationality can only consist of alphabetical letters'
                    }
					}
                },
                'Forms[][With Effect From]': {
					
                    validators: {
                 		 notEmpty: {
                            message: 'Effective Date is required'
                        },
                          date: {
                            format: 'DD-MM-YYYY',
                            message: 'The value is not a valid date',
                        },
					}
              },

              'Forms[][ID Document Type]': {
                    validators: {
                        notEmpty: {
                            message: 'ID Document Type is Required'
                        },
                    }
                },

                "Forms[][ID Document Number]": {
                    validators: {
	 					id: {
                        	country: function () {
                                var country =  $("input[type='radio'][name='Forms[][ID Document Type]']:checked").val();
								
								//dict for country codes 
								
								var country_dict = {
								  'HKID': "HK",
								  'PRC Identity Card': "CN",
								  1: "some value"
								};
								
								var countrycode = country_dict[country];
								console.log(country);
								return countrycode
                        },
                            message: 'The value is not a valid ID',
                        },
                        notEmpty: {
                            message: 'ID Document Number is required'
                        },
					}
                },


				//Name & ID
				   "Forms[][Change English Surname]": {
                    validators: {
                        notEmpty: {
                            message: 'The Changed English Surname is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The Changed English Surname can only consist of alphabetical letters'
                        }
                    }
                },

                "Forms[][Change English Forename]": {
                    validators: {
                        notEmpty: {
                            message: 'The Changed English Forename is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The Changed English Surname can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][Change ID Document Number]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'The Changed ID Document Number can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][Country of Issue]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The Country of Issue can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][Gender]": {
                    validators: {
                        notEmpty: {
                            message: 'Gender is required'
                        },
                    }
                },

				//employment
               "Forms[][Name of Employer]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Employer Name can only consist of alphabetical letters'
                        },
                        notEmpty: {
                            message: 'Employer Name is required'
                        },
                    }
                },

               "Forms[][Nature of Business]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Nature of Business can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][Employer Address]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Nature of Business can only consist of alphabetical letters'
                        },
                        notEmpty: {
                            message: 'Employer Address is required'
                        },
                    }
                },

				"Forms[][Employment Status]": {
                    validators: {
                     notEmpty: {
                            message: 'Employment Status is required'
                        },
                    }
                },
				
				
				
				//address
				"Forms[][Flat]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Flat can only consist of alphabetical letters and numbers'
                        },
                    }
                },

				"Forms[][Floor]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Floor can only consist of alphabetical letters and numbers'
                        },
                    }
                },

				"Forms[][Block]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Block can only consist of alphabetical letters and numbers'
                        }
                    }
                },

				"Forms[][Building]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Building can only consist of alphabetical letters and numbers'
                        }
                    }
                },

				"Forms[][Estate]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Estate can only consist of alphabetical letters and numbers'
                        }
                    }
                },



				"Forms[][Street]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Street can only consist of alphabetical letters and numbers'
                        },
                        notEmpty: {
                            message: 'Street is required'
                        },

                    }
                },

				"Forms[][District]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'District can only consist of alphabetical letters and numbers'
                        },
                        notEmpty: {
                            message: 'District is required'
                        },
                    }
                },


				"Forms[][Province]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Province can only consist of alphabetical letters'
                        }
                    }
                },


				"Forms[][City]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'City can only consist of alphabetical letters'
                        },
                        notEmpty: {
                            message: 'City is required'
                        },

                    }
                },

				"Forms[][Country]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Country can only consist of alphabetical letters'
	                        },
                        notEmpty: {
                            message: 'City is required'
                        },

	                 }
	             },


			  //email address 
			  "Forms[][Email Address]":{
				     validators: {
                        emailAddress: {
                            message: 'The value is not a valid email address',
                        	},
                        notEmpty: {
                            message: 'Email Address is required'
                        },

	                    }
	                },

//mandatory areas
			    "Forms[][日期]": {
                    validators: {
                        notEmpty: {
                        message: 'The Date is required'
                        },
                        date: {
                            format: 'DD-MM-YYYY',
                            message: 'The value is not a valid date',
                        },
                    }
                },
                "Forms[][英文姓氏]": {
                    validators: {
                        notEmpty: {
                            message: 'The English Surname is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The English Surname can only consist of alphabetical letters'
                        }
                    }
                },
                "Forms[][英文名稱]": {
                    validators: {
                        notEmpty: {
                            message: 'The English Given Name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The English Forename can only consist of alphabetical letters'
                        }
                    }
                },

		        "Forms[][賬戶英文姓氏（若與當前不同）]": {
		                    validators: {
		                        regexp: {
		                            regexp: /^[a-zA-Z ]+$/,
		                            message: 'The English Surname can only consist of alphabetical letters'
		                        }
		                    }
		                },
		        "Forms[][賬戶英文名稱（若與當前不同）]": {
		                    validators: {
		                        regexp: {
		                            regexp: /^[a-zA-Z ]+$/,
		                            message: 'The English Surname can only consist of alphabetical letters'
                        }
                    }
                },

                'Forms[][國籍]': {
                    validators: {
                 		 notEmpty: {
                            message: 'Nationality is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Nationality can only consist of alphabetical letters'
                    }
					}
                },
                'Forms[][生效日期]': {
					
                    validators: {
                 		 notEmpty: {
                            message: 'Effective Date is required'
                        },
                          date: {
                            format: 'DD-MM-YYYY',
                            message: 'The value is not a valid date',
                        },
					}
              },

              'Forms[][身分證明文件類別]': {
                    validators: {
                        notEmpty: {
                            message: 'ID Document Type is Required'
                        },
                    }
                },

                "Forms[][身分證明文件號碼]": {
                    validators: {
	 					id: {
                        	country: function () {
                                var country =  $("input[type='radio'][name='Forms[][ID Document Type]']:checked").val();
								
								//dict for country codes 
								
								var country_dict = {
								  'HKID': "HK",
								  'PRC Identity Card': "CN",
								  1: "some value"
								};
								
								var countrycode = country_dict[country];
								console.log(country);
								return countrycode
                        },
                            message: 'The value is not a valid ID',
                        },
                        notEmpty: {
                            message: 'ID Document Number is required'
                        },
					}
                },


				//Name & ID
				   "Forms[]更改英文姓氏]": {
                    validators: {
                        notEmpty: {
                            message: 'The Changed English Surname is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The Changed English Surname can only consist of alphabetical letters'
                        }
                    }
                },

                "Forms[][更改英文名稱]": {
                    validators: {
                        notEmpty: {
                            message: 'The Changed English Forename is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The Changed English Surname can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][更改身份證明文件號碼]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'The Changed ID Document Number can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][簽發國]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The Country of Issue can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][性別]": {
                    validators: {
                        notEmpty: {
                            message: 'Gender is required'
                        },
                    }
                },

				//employment
               "Forms[][僱主名稱]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Employer Name can only consist of alphabetical letters'
                        },
                        notEmpty: {
                            message: 'Employer Name is required'
                        },
                    }
                },

               "Forms[][業務性質]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Nature of Business can only consist of alphabetical letters'
                        }
                    }
                },

               "Forms[][僱主地址]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Nature of Business can only consist of alphabetical letters'
                        },
                        notEmpty: {
                            message: 'Employer Address is required'
                        },
                    }
                },

				"Forms[][就業狀況]": {
                    validators: {
                     notEmpty: {
                            message: 'Employment Status is required'
                        },
                    }
                },
				
				
				
				//address
				"Forms[][室]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Flat can only consist of alphabetical letters and numbers'
                        },
                    }
                },

				"Forms[][層數]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Floor can only consist of alphabetical letters and numbers'
                        },
                    }
                },

				"Forms[][座數]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Block can only consist of alphabetical letters and numbers'
                        }
                    }
                },

				"Forms[][大廈]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Building can only consist of alphabetical letters and numbers'
                        }
                    }
                },

				"Forms[][屋邨]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Estate can only consist of alphabetical letters and numbers'
                        }
                    }
                },



				"Forms[][街道]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'Street can only consist of alphabetical letters and numbers'
                        },
                        notEmpty: {
                            message: 'Street is required'
                        },

                    }
                },

				"Forms[][地區]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]+$/,
                            message: 'District can only consist of alphabetical letters and numbers'
                        },
                        notEmpty: {
                            message: 'District is required'
                        },
                    }
                },


				"Forms[][省]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Province can only consist of alphabetical letters'
                        }
                    }
                },


				"Forms[][城市]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'City can only consist of alphabetical letters'
                        },
                        notEmpty: {
                            message: 'City is required'
                        },

                    }
                },

				"Forms[][國家]": {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'Country can only consist of alphabetical letters'
	                        },
                        notEmpty: {
                            message: 'City is required'
                        },

	                 }
	             },
			  //email address 
			  "Forms[][電郵地址]":{
				     validators: {
                        emailAddress: {
                            message: 'The value is not a valid email address',
                        	},
                        notEmpty: {
                            message: 'Email Address is required'
                        },

	                    }
	                },

			   },
              plugins: {
	
	  
                trigger: new FormValidation.plugins.Trigger(),
				submitButton: new FormValidation.plugins.SubmitButton(),
			    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),

				
                message: new FormValidation.plugins.Message({
                    clazz: 'error_box',
                    container: function(field, ele) {

                        return FormValidation.utils.closest(ele, '.validation')
						}
                }),

              
 				

            },
            }
    	)

			

        .on('plugins.message.displayed', function(e) {
				document.getElementById(e.field).classList.remove("validated");
				document.getElementById(e.field).classList.add("error");
				 
				errortab = document.getElementById(e.field).getAttribute("tabname");
				$('[aria-controls="'+ errortab + '-content"]').addClass("error-tab");

				
        })

    	.on('core.element.validated', function(e) {
        // e.element presents the field element
        // e.valid indicates the field is valid or not
        if (e.valid) {
				document.getElementById(e.field).classList.remove("error");
				document.getElementById(e.field).classList.add("validated");
				errortab = document.getElementById(e.field).getAttribute("tabname");
				$('[aria-controls="'+ errortab + '-content"]').removeClass("error-tab");
				arr[e.field] = "temp";
				

				for(var key in arr)
				{

				    if(arr[key]== errortab){
					$('[aria-controls="'+ errortab + '-content"]').addClass("error-tab");

				}
				
								
				if(arr[key]== "voyage1-tab1"){
					$('[aria-controls="'+ "voyage1-tab1" + '-content"]').addClass("error-tab");

				}

				};
        }

        if (!e.valid) {
				
				errortab = document.getElementById(e.field).getAttribute("tabname");
				
				arr[e.field] = errortab;

	
		
        }
    });
  		$("input[type='radio'][name='Forms[][ID Document Type]']").on('change', function () {
        // Revalidate the ID field whenever user changes the country
        fv.revalidateField('Forms[][ID Document Number]');
	});
	    $('input[type=radio]').change(function() {
		var value = $(this).attr("name");
		fv.revalidateField(value);
    });



function validate() {
	fv.validate();
	fv.validate();
}


//fv.validate();


//for (let key in arr) {
	//console.log(arr);
	//$('[aria-controls="voyage1-tab1-content"]').css("margin-top", "100px");

//}




