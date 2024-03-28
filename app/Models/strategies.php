<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class strategies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'coin','conditions','type','wins','losses','favourite'
    ];
}
