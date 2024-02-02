<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hadiah extends Model
{
    use HasFactory;

    protected $table = 'hadiah';
    protected $fillable = ['nama_hadiah'];

    public function anggota(){
        return $this->belongsToMany(anggota::class);
    }
}
