<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'Tamu';
    protected $fillable = ['nama','nik','alamat','umur','jenis_kelamin','stautus','waktu'];
}
