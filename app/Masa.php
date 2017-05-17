<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masa extends Model
{
    
	public funciton siparis()
	{
		return $this->hasMany(Siparis::class);
	}

}