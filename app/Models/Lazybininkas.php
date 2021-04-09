<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lazybininkas extends Model
{
    use HasFactory;

    public function lazybininkasArklys()
    {
        return $this->belongsTo('App\Models\Arklys', 'arklys_id', 'id');
    }
 
}
