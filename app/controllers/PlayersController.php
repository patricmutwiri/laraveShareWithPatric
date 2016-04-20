<?php

class PlayersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		

	return View::make('index')->with('count_player',$count_player);
	}

	//viewing all the players

	public function view_players()
	{
		$players = Player::all();

	return View::make('players_details')->with('players',$players);

		
	}
		public function search()
	{

				$searchTerm = Input::get('search_term');
				$players   = Player::orWhere(function($query) use ($searchTerm){
				$query->orWhere('firstname', 'LIKE', $searchTerm)
					  ->orWhere('lastname', 'LIKE', $searchTerm)
					  ->orWhere('phone', 'LIKE', $searchTerm)
					  ->orWhere('email', 'LIKE', $searchTerm)
					  ->orWhere('rand_num', 'LIKE', $searchTerm)
					  ->orWhere('school', 'LIKE', $searchTerm)
					  ->orWhere('category', 'LIKE', $searchTerm)
					  ->orWhere('location', 'LIKE', $searchTerm);
		})->paginate(5);
		return View::make('players_details', compact('players'));

	}

	public function checkin()
	{
		$players = Player::all();

	return View::make('players_details')->with('players',$players);

		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('player_reg');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rand = 'GSP'.rand(100,100000);

		// Format the date of birth to 'Y-m-d'
		$dob        = Input::get('dob'); // returns and array
		$datestring = $dob['year'] .'-'. $dob['month'] .'-'. $dob['day'];

		// Merge new date string back to Input
		Input::merge(['dob' => $datestring]);



	    $data = Input::all();
		$validator = Validator::make($data, Player::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		// Helper: File Upload in Player Model




		$check=Player::all()->count();
		if($check >=10){
				return Redirect::to('view_players')->with('message', 'You have reached the maximum number allowed');

		}
		else {

		// $data['id_copy']    = Player::uploadFile(Input::file('id_copy'), 'id_copy');
		$data['photo'] = Player::uploadFile(Input::file('photo'), 'photo');
		$players       = new Player($data,$rand);
		$players ->rand_num = $rand;
		$players->save();

		$firstname = Input::get('firstname');
		$email = Input::get('email');

		$information= 'Dear'.$firstname. 'You have been registered to Greensport'.' Your game number is '.'<b>'. $rand.'</b>'. 'We are the champions and we belive in winning';

			$data = ['information'=>$information];

		Mail::send('emails.welcome', $data, function($message) use($email)
      {
      	  
          $message->to($email)
          ->subject('GreenSport registration' );

      });

		return Redirect::to('view_players')->with('message', 'player registration was successful');
		}

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
		->select('team.teamname', 'team.captain1','players.location','players.firstname','players.phone',
				'players.rand_num','players.photo')
		->where('players.team_id','=', $id)->paginate(10);

	


	return View::make('teamdata')->with('teams',$teams);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$player  = Player::find($id);

		return View::make('edit_player', compact('player',$player));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		 $players = Player::findOrFail($id);
		 $data = Input::all();
		$validator = Validator::make($data, Player::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		// Helper: File Upload in Player Model

		//$data['id_copy']    = Player::uploadFile(Input::file('id_copy'), 'id_copy');
		$data['photo'] = Player::uploadFile(Input::file('photo'), 'photo');
		$players       = new Player($data);
		$players->update($data);

		return redirect::to('view_players')->with('message', 'file update was successful');
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
         Player::destroy($id);
        // redirect
        Session::flash('message', 'Successfully deleted the player!');
        return Redirect::to('view_players');
	}

	//the teams view in registration field from database

	public function dropdown(){
		$teams = Owner::all('teamname');

	return View::make('player_registration')->with('teams',$teams);


	}

	


}
