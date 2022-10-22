<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokobuku extends Model
{
    use HasFactory;
    protected $table = 'tokobukus';
    protected $fillable = ['id','nama','jenis','harga'];
}
