<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerpen extends Model
{
    use HasFactory;
    protected $fillable=
    ['judul', 'tanggal', 'isi', 'email'];
}
