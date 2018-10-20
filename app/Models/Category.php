<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class Category extends Model
{
    protected $fillable = ['name','is_directory','level','path'];

    protected $casts = ['is_directory' => 'boolean',];


    protected static function boot()
    {
           parent::boot();

           static::creating(function(Category $category)
           {
             if (is_null($category->parent_id)) {
               $category->level = 0 ;
               $category->path = '-';
             }else {
               $category->level = $category->parent->level+1;
               $category->path = $category->parent->path.$category->parent_id.'-';
             }
           });
    }


public function parent()
{
  return $this->belongsTo(Category::class);
}



public function children()
{
  return $this->hasMany(Category::class);
}


public function products()
{
  return $this->hasMany(Product::class );
}


public function getPathIdsAttribute()
{
  // trim($str, '-') 将字符串两端的 - 符号去除
  // explode() 将字符串以 - 为分隔切割为数组
  // 最后 array_filter 将数组中的空值移除

    return array_filter(explode('-',trim($this->path,'-')));
}


public function getAncestorsAttribute()
{
      return Category::query()
              ->whereIn('id',$this->path_ids)
              ->orderBy('level')
              ->get();
}


public function getFullNameAttribute()
{
  return $this->ancestors
          ->pluck('name')
          ->push($this->name)
          ->implode(' - ');
}





}
