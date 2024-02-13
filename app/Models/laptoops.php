<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptoops extends Model
{
    use HasFactory;

    protected $table = 'laptoops';

    protected $fillable = [
    'name',
    'manufacturer',
    'os'
    ];


public $timestamps = false;

}
