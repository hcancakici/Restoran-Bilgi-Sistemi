<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masa extends Model
{
    
	public function siparis()
	{
		return $this->hasMany(Siparis::class);
	}

}