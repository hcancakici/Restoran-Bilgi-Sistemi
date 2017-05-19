<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{

    protected $fillable=[
        'ad',
        'soyad',
        'tc'
    ];

    public function siparis()
    {
		return $this->hasMany(Siparis::class);
	}
	
}