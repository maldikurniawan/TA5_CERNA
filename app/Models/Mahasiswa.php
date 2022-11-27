<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    // protected $table = 'Mahasiswa';
    // protected $primaryKey = 'id_mhs';
    protected $fillable=
    ['id_mhs', 'nama_mhs', 'npm', 'angkatan'];
}
