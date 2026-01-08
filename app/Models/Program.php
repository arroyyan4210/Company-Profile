<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // Nama tabel (opsional, tapi aman ditulis)
    protected $table = 'programs';

    // Kolom yang boleh diisi (sesuaikan nanti)
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
