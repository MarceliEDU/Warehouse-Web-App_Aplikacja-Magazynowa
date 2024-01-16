<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zejscia extends Model
{
    use HasFactory;
    protected $table = 'zejscia';
    public $timestamps = true;
    protected $fillable = ['czy_zeszlo'];
}
