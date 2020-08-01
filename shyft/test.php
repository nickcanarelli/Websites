var first_name = $('#first-name').val();
            if(first_name == ''){
			    $('.message_box').html(
			        '<span style="color:red;">Please enter a First Name.</span>'
			    );
			    $('#first-name').focus();
                return false;
            }

            var last_name = $('#last-name').val();
            if(last_name == ''){
			    $('.message_box').html(
			        '<span style="color:red;">Please enter a Last Name.</span>'
			    );
			    $('#last-name').focus();
                return false;
            }
		
		    var email = $('#email').val();
            if(email == ''){
			    $('.message_box').html(
			        '<span style="color:red;">Please enter an Email Address.</span>'
			    );
			    $('#email').focus();
                return false;
			}
		    if( $("#email").val()!='' ){
			    if( !isValidEmailAddress( $("#email").val() ) ){
			        $('.message_box').html(
			            '<span style="color:red;">Provided email address is invalid. Please try again.</span>'
			        );
			        $('#email').focus();
			        return false;
			    }
            }

            var phone = $('#phone').val();
            if(phone == ''){
			    $('.message_box').html(
			        '<span style="color:red;">Please enter a Phone Number.</span>'
			    );
			    $('#phone').focus();
                return false;
            }

            var company = $('#company').val();
            if(company == ''){
			    $('.message_box').html(
			        '<span style="color:red;">Please enter a Company Name.</span>'
			    );
			    $('#company').focus();
                return false;
            }