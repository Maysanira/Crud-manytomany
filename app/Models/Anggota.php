<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'tag_id'
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'jadwal_anggotas','anggota_id','jadwal_id');
    }
}
