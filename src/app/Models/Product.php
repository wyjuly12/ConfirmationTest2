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
        return $this->belongsToMany(ProductSeason::class);
    }

    //ローカルスコープ(キーワード検索)
    public function scopeKeywordSearch($query,$keyword){
        if(!empty($keyword)){
            $query->where('name','LIKE','%'.$keyword.'%');
        }
    }

    // ローカルスコープ(価格検索)
    public function socopePriceSort($query,$price){
        if(!empty($price)){
            if($sort = 'asc'){
                $products = Product::orderBy('price' , 'asc')->get();
            }
            if($sort = 'dasc'){
                $products = Product::orderBy('price' , 'dasc')->get();               
            }
        }
    }



}
