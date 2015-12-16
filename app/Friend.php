<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; 

class Friend extends Model
{
    protected $table = 'user_friend_pivot';

    public function friend()
    {	
    	return User::find($this->friend_id);
    }
}
