<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // menambahkan kolom kolom yg boleh di isi
    protected $fillable=[
        'nama','email', 'alamat'
    ];
}
