jQuery(document).ready(function ($) {
    
	// Perform AJAX login/register on form submit
	$('form#register').on('submit', function (e) {
    if (!$(this).valid()) return false;
    $('p.status', this).show().text(ajax_auth_objectB.loadingmessage);
      action = 'ajaxlogin';
      username = 	$('form#login #username').val();
      password = $('form#login #password').val();
      email = '';
      firstname = '';
      lastname = '';
      security = $('form#login #security').val();

		if ($(this).attr('id') == 'register') {
			action = 'ajaxregister';
			username = $('#email').val();
			password = $('#signonpassword').val();
      email = $('#email').val();
      firstname = $('#fname').val();
      lastname = $('#lname').val();
      security = $('#signonsecurity').val();	
    }  
    
		ctrl = $(this);
		$.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_auth_objectB.ajaxurl,
            data: {
                'action': action,
                'username': username,
                'password': password,
                'email': email,
                'firstname': firstname,
                'lastname': lastname,
                'security': security
            },
            success: function (data) {
				$('p.status', ctrl).text(data.message);
				if (data.loggedin == true) {
                    document.location.href = ajax_auth_objectB.redirecturlB;
                }
            }
        });
        e.preventDefault();
    });
	
	// Client side form validation
    if (jQuery("#register").length) 
    return
		//jQuery("#register").validate();
    else if (jQuery("#login").length) 
		jQuery("#login").validate();
});