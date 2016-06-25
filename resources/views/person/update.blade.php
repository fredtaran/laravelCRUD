<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
	<title>{{ $title }}</title>
</head>
<body>

	<div class="container">

		<h1>Update User Data</h1>

		<form action="{{ url('/update') }}" method="post">

			{{ csrf_field() }}

			<label>Firstname</label>
			<input type="text" name="firstname" value="{{ $person->firstname }}" class="form-control">
			<label>Middlename</label>
			<input type="text" name="middlename" value="{{ $person->middlename }}" class="form-control">
			<label>Lastname</label>
			<input type="text" name="lastname" value="{{ $person->lastname }}" class="form-control">
			<label>Birthdate</label>
			<input type="text" name="bday" value="{{ date('m-d-Y', strtotime($person->bday)) }}" class="form-control">
			<label>Age</label>
			<input type="text" name="age" value="{{ $person->age }}" class="form-control">

			<input type="hidden" name="id" value="{{ $person->id }}">
		 
			<button type="submit" name="save" class="btn btn-primary" style="margin-top: 25px"> Save Changes</button>
			<a href="{{ url('/') }}" class="btn btn-warning" style="margin-top: 25px">Return to home</a>

		</form>

	</div>

</body>
</html>