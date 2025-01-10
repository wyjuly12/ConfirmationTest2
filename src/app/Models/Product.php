<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'price',
    'image',
    'description',
    ];

    // リレーション
    public function seasons(){
        return $this->belongsToMany(ProductSeason::class)->withTimestamps();
    }

    //ローカルスコープ(キーワード検索)
    public function scopeKeywordSearch($query,$keyword){
        if(!empty($keyword)){
            $query->where('name','LIKE','%'.$keyword.'%');
        }
    }

    // ローカルスコープ(価格検索)
    public function scopePriceSort($query,$sort){
        if(!empty($sort)){
            if($sort = 'asc'){
                $products = Product::orderBy('price')->get();
            }
            if($sort = 'desc'){
                $products = Product::orderByDesc('price')->get();               
            }
        }
    }


   



}
