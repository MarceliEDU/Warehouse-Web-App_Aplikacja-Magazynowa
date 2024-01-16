<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dostawy extends Model
{
    use HasFactory;
    protected $table = 'dostawy';
    public $timestamps = true;
    protected $fillable = ['id_produkty','id_dostawcy'];
}
