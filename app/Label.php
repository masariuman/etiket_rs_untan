<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    //
    protected $table = 'labels';

    protected $fillable = [
        'mr',
        'nama',
        'obat',
        'indikasi',
        'aturan_pakai',
        'aturan_pakai2',
        'aturan_pakai3',
        'sebelum_sesudah',
        'jumlah',
        'bentukobat',
        'nomor_urut_input'
    ];
}
