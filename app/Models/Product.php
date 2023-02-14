<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = array('name','description','price','category_id','sku');
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function media()
    {
        return $this->hasMany('App\Models\ProductMedia');
    }

    public function tags()
    {
        return $this->hasMany('App\Models\ProductTag');
    }
    public function prices()
    {
        return $this->hasMany('App\Models\ProductPrices');
    }
    public function attributes()
    {
        return $this->belongsToMany('App\Models\Attribute')->withPivot('values');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\ProductReview');
    }

    public function parent()
    {
        return self::find($this->parent_id);
    }

    public static function getActiveProducts()
    {
        return self::where(['status' => 'active','stock_status' => 'in'])->where('stock_quantity','>',0);
    }

    public function in_stock()
    {
        return $this->stock_status == "in";
    }

    public function get_images()
    {
        return $this->media()->where(['media_type' => 'image'])->get();
    }

    public function get_videos()
    {
        return $this->media()->where(['media_type' => 'video'])->get();
    }
}
