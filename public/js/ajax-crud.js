$( document ).ready( function() {

	// Hide the success notification
	$( '#success_notif' ).hide();

	// Add new data

	$( '#save_id' ).click( function ( event ) {

		event.stopImmediatePropagation();

		var data = {
			'firstname' : $( '#firstname' ).val(),
			'lastname' : $( '#lastname' ).val(),
			'middlename' : $( '#middlename' ).val(),
			'bday' : $( '#bday' ).val(),
			'age' : $( '#age' ).val(),
			'_token': $( '[name = "_token"]' ).val()
		}

		$.ajax({
			'url': window.location.origin + '/add',
			'type': 'POST',
			'data': data
		})
		.done( function( response ) {
			if( response != 'Save' ){
				if( data.firstname == '' ){
					$( '#firstname_error' ).html( response.firstname );
				} else {
					$( '#firstname_error' ).html('');
				}

				if( data.lastname == '' ) {
					$( '#lastname_error' ).html( response.lastname );
				} else {
					$( '#lastname_error' ).html('');
				}

				if( data.middlename == '') {
					$( '#middlename_error' ).html( response.middlename );
				}else {
					$( '#middlename_error' ).html('');
				}

				if( data.age == '' ) {
					$( '#age_error' ).html( response.age );
				} else {
					$( '#age_error' ).html('');
				}

				if( data.bday == '' ){
					$( '#bday_error' ).html( response.bday );
				} else {
					$( '#bday_error' ).html('');
				}

			} else {

				$( '#success_notif' ).show();
				$( '#firstname' ).val('');
				$( '#lastname' ).val('');
				$( '#middlename' ).val('');
				$( '#bday' ).val('');
				$( '#age' ).val('');

			}
		});
	});

	//

});

