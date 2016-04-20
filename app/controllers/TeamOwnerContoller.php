<?php

class TeamOwnerContoller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 // Teamowner Screen

	//getting database data in dropdown below
	public function dropdown(){
		$users = Owner::all('teamname');

	return View::make('player_registration')->with('users',$users);


	}
	//viewing all the teams

	public function view()
	{
		$teams = Owner::all();

	return View::make('team_details')->with('teams',$teams);

		
	}


	public function dropdownselect(){
		$users = Owner::lists('teamname');

	return View::make('player_reg')->with('users',$users);


	}
	
	public function index()
	{
		$count_player=Player::all()->count();
		$count=Owner::all()->count();
			return View::make('index')->with('count',$count)
			->with('count_player',$count_player);
	}
	public function search()
	{

				$searchTerm = Input::get('search_term');
				$teams   = Owner::orWhere(function($query) use ($searchTerm){
				$query->orWhere('teamname', 'LIKE', $searchTerm)
					  ->orWhere('category', 'LIKE', $searchTerm)
					  ->orWhere('captain1', 'LIKE', $searchTerm)
					  ->orWhere('rand_num', 'LIKE', $searchTerm)
					  ->orWhere('email1', 'LIKE', $searchTerm)
					  ->orWhere('phone1', 'LIKE', $searchTerm)
					  ->orWhere('location', 'LIKE', $searchTerm);
		})->paginate(5);
		return View::make('team_details', compact('teams'));

	}
	public function create()
	{
		$rules = [
			'teamname' => 'required',
			'location' => 'required',
			'category' => 'required',
			'captain1' => 'required',
			'email1'   => 'required',
			'phone1'   => 'required'
		];
		$validation = Validator::make(Input::all(), $rules);
		if($validation->passes())
		{
			$rand='GSP'.rand(100,100000);
			$user = new Owner;
			$user->teamname = Input::get('teamname');
			$user->location = Input::get('location');
			$user->category = Input::get('category');
			$user->captain1 = Input::get('captain1');
			$user->email1 = Input::get('email1');
			$user->phone1 = Input::get('phone1');
			$user->captain2 = Input::get('captain2');
			$user->email2 = Input::get('email2');
			$user->phone2 = Input::get('phone2');
			$user->rand_num=$rand;

			$user->save();



			// redirect
            Session::flash('message', 'Successfully created team Owners!');
            return Redirect::to('view');

			//return View::make('pages.register')->with('message', 'team created');
		}

			return Redirect::back()->withErrors($validation)->withInput();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$teams = DB::table('team')->join('players','team.id','=','players.team_id')
		->select('team.teamname', 'team.captain1','players.firstname','players.rand_num',
				'players.phone','players.photo')
		->where('team.teamname','=', $id)->paginate(10);

		return View::make('teamdata', compact('teams',$teams));
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$team  = Owner::find($id);

		return View::make('edit_team', compact('team',$team));

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
			$user = Owner::findOrFail($id);
			$data = Input::all();

			$user->update($data);

			//var_dump($user);


			// redirect
            Session::flash('message', 'Record was updated.');
            return Redirect::to('view');

			//return View::make('pages.register')->with('message', 'team created');
	

		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 // delete
         Owner::destroy($id);
        // redirect
        Session::flash('message', 'Successfully deleted the team owner!');
        return Redirect::to('view');
	
	}

	

}
