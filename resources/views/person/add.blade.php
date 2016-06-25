<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
	<title>{{ $title }}</title>
</head>
<body>

	<div class="container">

		<h1>Add User</h1>

		<div class="alert alert-success" id="success_notif"><p> Successfully Added.</p></div>

		<form action="#" method="POST" >

			{{ csrf_field() }}

			<label>Firstname</label>
			<input type="text" name="firstname" id="firstname" class="form-control">
			<p class="help-block" id="firstname_error"></p>

			<label>Middlename</label>
			<input type="text" name="middlename" id="middlename" class="form-control">
			<p class="help-block" id="middlename_error"></p>
			
			<label>Lastname</label>
			<input type="text" name="lastname" id="lastname" class="form-control">
			<p class="help-block" id="lastname_error"></p>
			
			<label>Birthdate</label>
			<input type="text" name="bday" id="bday" class="form-control">
			<p class="help-block" id="bday_error"></p>
			
			<label>Age</label>
			<input type="text" name="age" id="age" class="form-control">
			<p class="help-block" id="age_error"></p>

			<button type="button" name="save" id="save_id" class="btn btn-primary" style="margin-top: 25px"> Save</button>
			<a href="{{ url('/') }}" class="btn btn-warning" style="margin-top: 25px">Return Home</a>


		</form>
	</div>

	<script type="text/javascript" src="{{ url('/js/jquery-3.0.0.js') }}"></script>
	<script type="text/javascript" src="{{ url('/js/ajax-crud.js') }}"></script>

</body>
</html>