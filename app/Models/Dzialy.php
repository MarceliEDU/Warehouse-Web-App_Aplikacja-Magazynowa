<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dzialy extends Model
{
    use HasFactory;
    protected $table = 'dzialy';
    public $timestamps = true;
    protected $fillable = ['dzial'];
}
