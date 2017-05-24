<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malzeme extends Model
{
    
	public function urun()
	{
		return $this->belongsToMany(Urun::class)->withPivot('malzeme_id', 'urun_id');
	}

}
