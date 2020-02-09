<?php 
 
use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends  Eloquent {
	public $name;

   protected $table = 'users';
   public $timestamps = [];
   protected $fillable = ['name', 'email'];	

	public function create_user($data){
	    $user = User::create($data);
	    return $user;
	}

}


