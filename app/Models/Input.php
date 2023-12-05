<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Input extends Model
{
    use SoftDeletes;
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
