<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arklys extends Model
{
    use HasFactory;

    public function arklysLazybininkai()
    {
        return $this->hasMany('App\Models\Lazybininkas', 'arklys_id', 'id');
    }
 
}
