<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Instansi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'instansi'; // Tambahkan ini
    protected $fillable = ['nama', 'no_telp', 'instansi'];
}