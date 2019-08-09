<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabelObatLuar extends Model
{
    //
    protected $table = 'label_obat_luar';

    protected $fillable = [
        'mr',
        'nama',
        'obat',
        'indikasi',
        'rute_pemberian',
        'x_sehari',
        'per_jam',
        'note_x',
        'note',
        'ed',
        'jumlah',
        'jumlah_jenis',
        'nomor_urut_input'
    ];

}
