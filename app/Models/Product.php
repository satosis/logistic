<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Product extends Model
{
    protected $table='product';
    protected $guarded=[''];
    protected $country =[
        '0' =>'[N\A]',
        '1' =>'Việt Nam',
        '2' =>'Anh',
        '3' =>'Thụy Sỹ',
        '4' =>'Mỹ'
    ];
    public function getCountry(){
        return Arr::get($this->country,2,'[N\A]');
    }
    public function category(){
        return $this->belongsTo(Category::class,'pro_category');
    }
    public function keyword()
    {
        return $this->belongsToMany(Keyword::class,'product_keywords','pk_product_id','pk_keyword_id');
    }

    public function favourite(){
        return $this->belongsToMany(User::class,'user_favourite','uf_product_id','uf_user_id');
    }

    public function getStarAttribute(){
        return $this->attributes['pro_review_total'] > 0 ? (int)(($this->attributes['pro_review_star'] - 5 ) / $this->attributes['pro_review_total']) : $this->attributes['pro_review_star'];
    }
}   
