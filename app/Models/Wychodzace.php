<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wychodzace extends Model
{
    use HasFactory;
    protected $table = 'wychodzace';
    public $timestamps = true;
    protected $fillable = ['id_zejscia','id_produkty'];
}
