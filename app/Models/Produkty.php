<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkty extends Model
{
    use HasFactory;
    protected $table = 'produkty';
    public $timestamps = true;
    protected $fillable = ['nazwa','ilosc','id_dzialy','id_dostawcy'];
}
