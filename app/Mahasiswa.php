<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $table = 'mahasiswa';
   protected $fillable = ['nama','npm','jenis kelamin','umur','jurusan','agama','alamat'];
}