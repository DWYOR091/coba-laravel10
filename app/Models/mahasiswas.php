<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswas extends Model
{
    use HasFactory;
    protected $fillable = [
      'npm',
      'nama',
      'jurusan'
    ];
}
