<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {

    return [

        'title' => $faker -> word,
        'original_title' => $faker -> word,
        'nationality' => $faker -> state,
        'date_of_release' => $faker -> dateTimeBetween( $startDate = '-30 years',
                                                        $endDate = 'now',
                                                        $timezone = null ),
        'vote' => $faker -> numberBetween(5, 10),

    ];

});
