<?php

namespace App\Http\Controllers;

use App\Person;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

class PersonController extends Controller
{
 
	public function index() 
	{

		$persons = Person::all();

		return view( 'person.index', array( 'persons' => $persons, 'title' => 'Homepage' ) );
	}

	public function add_view() 
	{
		return view( 'person.add', [ 'title' => 'Add' ] );
	}

	public function add(Request $request) 
	{

		$bday = date('Y-m-d', strtotime($request->bday));

		$rules = array (
	        'firstname' => 'required',
	        'lastname' => 'required',
	        'middlename' => 'required',
	        'bday' => 'required',
	        'age' => 'required'
	    );

		$validator = Validator::make($request->all(), $rules);

		if ( $validator->fails()) {

			$messages = $validator->messages();

			return $validator->errors();

		} else {
			$person = Person::create( array(
				'firstname' => $request->firstname,
				'lastname' => $request->lastname,
				'middlename' => $request->middlename,
				'bday' => $bday,
				'age' => $request->age,
			));

			return 'Save';

		}

	}

	public function delete($id)
	{
		$person = Person::findOrFail($id);

		$person->delete();

		return redirect('');
	}

	
	public function update_view(Request $request)
	{

		$personData = Person::findOrFail($request->id);

		return view( 'person.update', array( 'title' => 'Update', 'person' => $personData ) );
	}

	public function update(Request $request)
	{

		$person = Person::find($request->id);

		$person->firstname = $request->firstname;
		$person->lastname = $request->lastname;
		$person->middlename = $request->middlename;
		$person->bday = $request->bday;
		$person->age = $request->age;

		$person->save();


		return redirect( '/' );
	}


}