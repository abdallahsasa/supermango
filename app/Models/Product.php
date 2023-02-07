<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Products';
    protected $fillable = array('name','description','price','category_id','sku');
    public function categories()
    {
        return $this->hasOne('App\models\Category');
    }

    public function media()
    {
        return $this->hasMany('App\models\ProductMedia');
    }

    public function tags()
    {
        return $this->hasMany('App\models\ProductTag');
    }

    public function attributes()
    {
        return $this->belongsToMany('App\models\Attribute')->withPivot('values');
    }

    public function reviews()
    {
        return $this->hasMany('App\models\ProductReview');
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
