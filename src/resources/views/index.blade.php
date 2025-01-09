@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="main-innner">
    <div class="main-header">
        <div class="main-header__title">
            <h2>商品一覧</h2>
        </div>
        <div class="main-header__button"> 
            <form action="/products/register" method="get">
                <button type="submit">＋&nbsp;商品追加</> 
            </form>  
        </div>                 
    </div>

    <div class="main-content">
        <div class="main-content__search">
            <form class="main-content__from" action="/products/search" method="get">
                <div class="main-content__search-input">
                <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="商品名で検索">
                </div>  
                <div class="main-content__search-button">
                    <button type="submit">検索</button>
                </div>
            </form>
            <div class="main-content__search-title">
                <p>価格順で検索</p>
            </div>
            <div class="main-content__search-sort">
                <select name="sort"  id="">
                    <option hidden disabled selected>価格で並び替え</option>
                    <option value="asc" >価格の低い順</option>
                    <option value="dasc">価格の高い順</option>
                </select>
            </div>
        </div>

        <!-- データ一覧 -->
        <div class="main-content__view">
            @foreach($products as $product)
            <div class="main-content__view-box">
                <div class="main-content__view-img">
                    <a href="/products/:{{$product->id}}"><img src="{{ asset('storage/'.$product->image) }}" alt=""></a>
                </div>
                <div class="main-content__view-content">
                    <div class="main-content__view-title">
                        <p>{{ $product->name }}</p>                       
                    </div>
                    <div class="main-content__view-text">
                        <p>￥{{ $product->price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@endsection