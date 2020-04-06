var ajaxpath = window.location.origin+'/includes/ajax.php';

$( document ).ready(function() {
});

$(document).on('click', '.register', function(e){
	e.preventDefault();

	var empty_fields = 0;
	var error_messages = '';
	var ajax_data = 'action=register';

	$('.is-required').each(function() {
		if($(this).val()){
			$(this).removeClass('is-invalid');
			ajax_data += '&'+$(this).attr('id')+'='+$(this).val();
		} else {
			empty_fields++;
			$(this).addClass('is-invalid');
		}
	});

	if(empty_fields == 0) {
		error_messages = '';
		$('.alert').removeClass('alert-danger').addClass('d-none');

		if((validateEmail($('#reg_email').val()))){
			$('#reg_email').removeClass('is-invalid');
		} else {
			$('#reg_email').addClass('is-invalid');
			empty_fields++;
			error_messages += '<p class="mb-0">Warning! Incorrect email format.</p>';
		}

		if($('#reg_password').val() == $('#reg_password_repeat').val()){
			$('#reg_password').removeClass('is-invalid');
			$('#reg_password_repeat').removeClass('is-invalid');
		} else {
			$('#reg_password').addClass('is-invalid');
			$('#reg_password_repeat').addClass('is-invalid');
			empty_fields++;
			error_messages += '<p class="mb-0">Warning! Passwords doesn\'t match.</p>';
		}

		/* Prachekinom visus reikalingus laukus */

		if(empty_fields == 0){
			error_messages = '';

			$.ajax({
				url:ajaxpath,
				type:'POST',
				data: ajax_data,
				success:function(results) {
					var obj = $.parseJSON(results);
					if(obj.error){
						error_messages = '<p class="mb-0">' + obj.error + '</p>';
						$('.alert').addClass('alert-danger').removeClass('d-none').html(error_messages);
					} else {
						$('.register').addClass('disabled');
						error_messages = '<p class="mb-0">' + obj.success + '</p>';
						$('.alert').addClass('alert-success').removeClass('d-none').html(error_messages);
						setTimeout(function(){location.href='/login.php', 1500} );
					}
				}
			});

		} else {
			$('.alert').addClass('alert-danger').removeClass('d-none').html(error_messages);
		}

	} else {
		error_messages = '<p class="mb-0">Warning! Please fill all fields.</p>';
		$('.alert').addClass('alert-danger').removeClass('d-none').html(error_messages);
	}
});

// login
$(document).on('click','.login',function(e){
	e.preventDefault();

	let empty_fields = 0;
	let error_messages = "";
	let ajax_data = "action=login";

	$('.is-required').each(function() {
		if($(this).val()){
			$(this).removeClass('is-invalid');
			ajax_data += '&'+$(this).attr('id')+'='+$(this).val();
		} else {
			empty_fields++;
			$(this).addClass('is-invalid');
		}
	});

	if(empty_fields == 0){
		$('.alert').removeClass('alert-danger').addClass('d-none').html(error_messages);
		$.ajax({
			url:ajaxpath,
			method:'POST',
			data:ajax_data,
			success:function(results){
			  var obj = $.parseJSON(results);
			  if(obj.error){
				error_messages = '<p class="mb-0">' + obj.error + '</p>';
				$('.alert').addClass('alert-danger').removeClass('d-none').html(error_messages);
			  } else if(obj.success) {
				$('.login').addClass('disabled');
				error_messages = '<p class="mb-0">' + obj.success + '</p>';
				$('.alert').addClass('alert-success').removeClass('d-none').html(error_messages);
				setTimeout(function(){location.href='/', 1500} );
			  }
			}
		});
	} else {
		error_messages = '<p class="mb-0">Please fill all fields!</p>';
		$('.alert').addClass('alert-danger').removeClass('d-none').html(error_messages);
	}
});
//Profile
 $(document).on('click',".profile",function(e){
	e.preventDefault();
	$('.dropdown-menu').slideToggle();
	console.log("click");
});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
