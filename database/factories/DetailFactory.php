<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Detail;


$factory->define(Detail::class, function (Faker $faker) {
    return [
      'num_room' => rand(1,12),
      'bed' => rand(1,30),
      'bathroom' => rand(1,8),
      'mq' => rand(1,1230),
      'img' => $faker -> imageUrl(400 , 400)
    ];
});
