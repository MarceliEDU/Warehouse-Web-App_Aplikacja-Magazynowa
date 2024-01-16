<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dostawcy extends Model
{
    use HasFactory;
    protected $table = 'dostawcy';
    public $timestamps = true;
    protected $fillable = ['nazwa','telefon'];
}
