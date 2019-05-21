<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\BaiViet;
use App\Mon;
use App\User;
use Faker\Generator as Faker;

$factory->define(BaiViet::class, function (Faker $faker) {
    return [
        'mon_id' => 2,
        'user_id' => 3,
        'tieu_de' => 'Tiêu đề cho những tiêu đề',
        'noi_dung' => $faker->text,
        'luot_xem' => $faker->randomNumber(),
    ];
});
