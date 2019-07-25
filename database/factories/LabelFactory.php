<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Label;
use Faker\Generator as Faker;

$factory->define(Label::class, function (Faker $faker) {
    return [
        //
        'mr' => $faker->text,
        'nama' => $faker->text,
        'obat' => $faker->text,
        'indikasi' => $faker->text,
        'aturan_pakai' => $faker->text,
        'aturan_pakai2' => $faker->text,
        'aturan_pakai3' => $faker->text,
        'sebelum_sesudah' => $faker->text,
        'jumlah' => $faker->randomDigitNotNull,
        'bentukobat' => $faker->text,
        'nomor_urut_input' => $faker->randomDigitNotNull,
    ];
});
