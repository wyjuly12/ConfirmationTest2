<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\ProductRequest;




class ProductController extends Controller
{
    
    // 一覧画面
    public function index(){
        $products = Product::Paginate(6);
        return view('index',compact('products'));
    }

    // 商品登録画面
    public function register(){
        $products = Product::all();
        return view('register',compact('products'));
    }


   //詳細画面 
    public function detail($productId){
        $product = Product::find($productId);
        return view('detail',compact('product'));
    }


    //登録機能
    public function create(ProductRequest $request){
 
        $dateStamp = date('Ymd_His');
        $fileName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$dateStamp.'_'.$fileName);

        Product::create([
            'name' => $request->name ,
            'price' => $request->price ,
            'image' => $dateStamp.'_'.$fileName ,
            'season_id' => $request->season_id,
            'description' => $request->description
        ]);


        return redirect('/products');
    }

    // 更新機能
    public function update(ProductRequest $request){
        
        $dateStamp = date('Ymd_His');
        $fileName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$dateStamp.'_'.$fileName);

       
        Product::find($request->id)->update([
            'name' => $request->name ,
            'price' => $request->price ,
            'image' => $dateStamp.'_'.$fileName ,
            'season_id' => $request->season_id ,
            'description' => $request->description    
        ]);

        return redirect('/products');
    }


    // 削除機能
    public function delete(Request $request){
        $form = $request->all();
        Product::find($request->id)->delete($form);
        return redirect('/products');
    }


    // 検索機能
    public function search(Request $request){
        $products = Product::keywordSearch($request->keyword)->priceSort($request->sort)->paginate(6);
        return view('index', compact('products'));
    }

 

 



}
