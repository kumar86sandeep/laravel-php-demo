

$(document).ready(function () {
		
		
		$('#contactUs').validate({ // initialize the plugin
			rules: {			  
				
				contactus_email: {
					required: true,
					email: true
				}			
			},
			messages: {
				
				contactus_email: {
					required: "Please enter your email address.",
					email: "Please enter valid email address.",
				}
			}
		});
		
		$('#getQuoteForm').validate({ 
			rules: {			  
				getquote_first_name: {
					required: true
				},
				getquote_last_name: {
					required: true
				},
				getquote_email: {
					required: true,
					email: true
				},
				getquote_phone: {
					required: true
				},
				/* getquote_condition: {
					required: true
				},
				getquote_mefor: {
					required: true
				} ,*/
				getquote_containertype: {
					required: true
				},
				/* getquote_notes: {
					required: function (el) {
						return $(el).closest('form#getQuoteForm').find('.getquote_containertype').val() == 'Custom';
					}
				} */				
			},
			messages: {
				getquote_first_name: {
					required: "Please enter your first name.",
				},
				getquote_last_name: {
					required: "Please enter your last name.",
				},
				getquote_email: {
					required: "Please enter your email address.",
					email: "Please enter valid email address.",
				},
				getquote_phone: {
					required: "Please enter your phone number.",
				},
				/* getquote_condition: {
					required: "Please select condition.",
				},
				getquote_mefor: {
					required: "Please select quote me for.",
				}, */
				getquote_containertype: {
					required: "Please select conatiner type.",
				},
				/* getquote_notes: {
					required: "Please enter your details.",
				} */
			}
		});
		
		$('#popupGetQuoteForm').validate({ 
			rules: {			  
				getquote_first_name: {
					required: true
				},
				getquote_last_name: {
					required: true
				},
				getquote_email: {
					required: true,
					email: true
				},
				getquote_phone: {
					required: true
				},
				/* getquote_condition: {
					required: true
				},
				getquote_mefor: {
					required: true
				} ,*/
				getquote_containertype: {
					required: true
				},
				/* getquote_notes: {
					required: function (el) {
						return $(el).closest('form#getQuoteForm').find('.getquote_containertype').val() == 'Custom';
					}
				} */				
			},
			messages: {
				getquote_first_name: {
					required: "Please enter your first name.",
				},
				getquote_last_name: {
					required: "Please enter your last name.",
				},
				getquote_email: {
					required: "Please enter your email address.",
					email: "Please enter valid email address.",
				},
				getquote_phone: {
					required: "Please enter your phone number.",
				},
				/* getquote_condition: {
					required: "Please select condition.",
				},
				getquote_mefor: {
					required: "Please select quote me for.",
				}, */
				getquote_containertype: {
					required: "Please select conatiner type.",
				},
				/* getquote_notes: {
					required: "Please enter your details.",
				} */
			}
		});
		
		$('#getContactUs').validate({ 
			rules: {			  
				getquote_first_name: {
					required: true
				},
				getquote_last_name: {
					required: true
				},
				getquote_email: {
					required: true,
					email: true
				},
				getquote_interested_in: {
					required: true
				},
				getquote_message: {
					required: true
				}				
			},
			messages: {
				getquote_first_name: {
					required: "Please enter your first name.",
				},
				getquote_last_name: {
					required: "Please enter your last name.",
				},
				getquote_email: {
					required: "Please enter your email address.",
					email: "Please enter valid email address.",
				},
				getquote_interested_in: {
					required: "Please enter your interest.",
				},				
				getquote_message: {
					required: "Please enter your message.",
				}
				
			}
		});
		
		// $('#contactus_phone').mask('(999) 999-9999');
		$('#getquote_phone').mask('(999) 999-9999');
		$('#getquote_phone_popup').mask('(999) 999-9999');
	});


   

	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
		$("#success-alert").slideUp(500);
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
