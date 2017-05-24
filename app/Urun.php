<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    
	public function malzeme()
	{
		return $this->belongsToMany(Malzeme::class)->withPivot('malzeme_id', 'urun_id');
	}

	public function siparis()
    {
        return $this->belongsToMany(Siparis::class)->withPivot('siparis_id', 'urun_id');
    }

}
