<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;
    protected $table = ('Inputs');
    protected $fillable = [
        'kb',
        'nama',
        'jv',
        'qty',
        'hj',
        'HargaPembelian',
        'Diskon',
        'JumlahPembayaran',
    ];
}
