<?php 
 
use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends  Eloquent {
	public $name;

   protected $table = 'users';
   public $timestamps = [];
   protected $fillable = ['name', 'email', 'pasword'];	

	public function create_user($data){
	    $user = User::create($data);
	    return $user;
	}


	public function search($data){

	    $user = User::firstOrFail()->where($data)->get()->first();
	    return $user;
	}

}


