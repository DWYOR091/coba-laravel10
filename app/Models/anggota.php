<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $fillable = [
        'nama'
    ];

    public function hadiah(){
        return $this->belongsToMany(hadiah::class);
    }
}
