<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effector extends Model
{
    //use HasFactory;
    static $categories = [
        "OverDrive","Distortion","Fuzz","Compressor","Booster","Delay","Reverb","Chorus","Phaser","Franger","Wah","AutoWah","Tremolo","MultiEffector","Vocoder"
    ];

    protected $fillable = [
        "name","maker","category","year","month","date","price","memo"
    ];
}
