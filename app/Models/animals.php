<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animals extends Model
{
    use HasFactory;

    protected $table = 'animals';

    protected $fillable = [
    'name',
    'color',
    'type'
    ];


public $timestamps = false;

}
