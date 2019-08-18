<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {


  $image = $faker->randomElement([
         "https://static.dongshangtong.com/products/20190818233540.png",
         "https://static.dongshangtong.com/products/20190818233541.png",
         "https://static.dongshangtong.com/products/20190818233542.png",
         "https://static.dongshangtong.com/products/20190818233543.png",
         "https://static.dongshangtong.com/products/20190818233544.png",
         "https://static.dongshangtong.com/products/20190818233545.png",
         "https://static.dongshangtong.com/products/20190818233546.png",
         "https://static.dongshangtong.com/products/20190818233547.png",
         "https://static.dongshangtong.com/products/20190818233548.png",
         "https://static.dongshangtong.com/products/20190818233549.png",

     ]);

     // 从数据库中随机取一个类目
      $category = \App\Models\Category::query()->where('is_directory', false)->inRandomOrder()->first();


     return [
         'title'        => $faker->word,
         'long_title'   => $faker->sentence,
         'description'  => $faker->sentence,
         'image'        => $image,
         'on_sale'      => true,
         'rating'       => $faker->numberBetween(0, 5),
         'sold_count'   => 0,
         'review_count' => 0,
         'price'        => 0,
         // 将取出的类目 ID 赋给 category_id 字段
         // 如果数据库中没有类目则 $category 为 null，同样 category_id 也设成 null
          'category_id'  => $category ? $category->id : null,
     ];
});
