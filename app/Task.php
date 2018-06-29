<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//tinker:  App\Task::incomplete()->get();
    public static function incomplete()
    {
    	return Task::where('completed', 0);
    }

	//tinker: App\Task::incomplete(App\Task::where(...))->get();
    // public static function incomplete($query) 
    // {
    // 	return $query->where('completed', 0);
    // }
}
