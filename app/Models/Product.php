<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSku;


class Product extends Model
{

  protected $fillable = [
    'title',  'description',  'image','no_sale',
    'rating', 'sold_count','review_count','price'
  ];

  protected $casts = [
    'on_sale'=>'boolean',
  ];


public function skus()
{
  return $this->hasMany(ProductSku::class);
}

}
