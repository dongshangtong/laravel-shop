<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductProperty extends Model
{
    protected $fillable = ['name','value'];

    public $timestamps = false;

    public function product()
    {

        return  $this->belongsTo(Product::class);
    }
}
