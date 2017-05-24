<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    
	public function urun()
	{
		return $this->belongsToMany(Urun::class)->withPivot('siparis_id', 'urun_id');
	}

	public function personel()
	{
		return $this->belongsTo(Personel::class);
	}

}