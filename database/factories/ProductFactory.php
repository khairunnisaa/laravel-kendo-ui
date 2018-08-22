<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $random = rand(1,3000);
    if($random % 2 == 0) {
        $category = \App\Models\Category::where('name','Fashion')->first();
        } else { 
            $category = \App\Models\Category::where('name','Bags')->first();
            }
    return [
        //
        'sku' => strtoupper($faker->word),
        'name' => $faker->name,
        'sell_price' => 0,
        'category_id' => $category->id,
    ];
});
