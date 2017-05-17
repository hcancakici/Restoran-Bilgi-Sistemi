<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    
	public function urun()
	{
		return $this->belongsToMany(Urun::class);
	}

	public function personel()
	{
		return $this->belongsTo(Personel::class);
	}

}