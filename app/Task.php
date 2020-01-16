<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) {  // Now you can use Task::incomplete()->where()-> or any //
    	return $query->where('completed', 0)->get();
    }
}
