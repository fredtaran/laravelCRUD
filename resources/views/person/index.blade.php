<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
	<title>{{ $title }}</title>
</head>
<body>

	<div class="container">

		<h1>User</h1>

		<table class="table table-striped">
			<thead>
				<th>Lastname</th>
				<th>Firstname</th>
				<th>Middlename</th>
				<th>Birthdate</th>
				<th>Age</th>
				<th>Action</th>
			</thead>

			<tbody>
				@foreach( $persons as $person )
				<tr>
					<td>{{ $person->lastname }}</td>
					<td>{{ $person->firstname }}</td>
					<td>{{ $person->middlename }}</td>
					<td>{{ date('m-d-Y', strtotime($person->bday)) }}</td>
					<td>{{ $person->age }}</td>
					<td><a href="{{ url('/update') . '/' . $person->id }}" class="btn btn-primary">Update</a>
						<a href="{{ url('/delete') . '/' . $person->id }}" class="btn btn-danger" name="_method" value="DELETE"> Delete</a>
				</tr>
				@endforeach
			</tbody>

		</table>

		<a href="{{ url('/add') }}" class="btn btn-info">Add</a>

	</div>

</body>
</html>