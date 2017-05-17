<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    
	public function malzeme()
	{
		return $this->belongsToMany(Malzeme::class);
	}

}
