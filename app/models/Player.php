<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Player extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'players';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static $rules = 
		[
					'firstname'     => 'required',
					'lastname' => 'required',
					'phone'    => 'required',
					'id_no'    => 'required',
					'email'    => 'required|email',
					'location' =>  'required',
					'category'  => 'required',
					'team_id'  => 'required',
					'school'  => 'required',
					'rand_num' =>'',
					'dob'    => 'required',
					'photo'  => 'required',
		];

	protected $fillable = ['firstname',  'lastname', 'phone', 'id_no', 'email', 'location', 'category','dob', 'rand_num', 'team_id','photo', 'school'];

	//files upload destination done here
	public static function uploadFile($file, $folder = 'public')
	{

	    $destination = self::makeFolder($folder);
	    $filename    = time() . $file->getClientOriginalName();
	    $file->move($destination, $filename);
	    return $filename;
	}
	  public static function makeFolder($folder)
	  {
		    $folder = public_path() . "/{$folder}/";
		    // Make directory if it doesn't exists
		    if(!is_dir($folder)) {
		      mkdir($folder);
		      chmod($folder, 777);
		    }
		    return $folder;
	  }

	  public function owner()
	  {
	  	return $this->belongsTo('Owner');

	  }


}
