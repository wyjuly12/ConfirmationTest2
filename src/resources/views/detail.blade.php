@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="main-content">
    <form class="form-detail" action="./productId:{{$product->id}}/update" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-contenner">
            <div class="form-group__image">
                <div class="form-group__image-view">
                    <input type="image" id="image" src="{{ asset('storage/'.$product->image) }}" alt="">
                </div>
                <div class="form-group__image-input">
                    <input type="file" name="image" id="image" >
                </div>
            </div>
            <div class="form-group__text">
                <div class="form-group__input">
                    <div class="form-group__input-label">
                        <label for="">商品名</label>
                    </div>
                    <div class="from-group__input-box">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="text" name="name" id="" value="{{ $product->name }}">
                    </div>
                    <div class="form-error">
                        @if($errors->has('name'))
                        <tr>
                            <td>{{ $errors->first('name')}}</td>
                        </tr>
                        @endif
                    </div>
                </div>
                <div class="form-group__input">
                    <div class="form-group__input-label">
                        <label for="">価格</label>
                    </div>
                    <div class="from-group__input-box">
                        <input type="text" name="price" id="" value="{{ $product->price }}">
                    </div>
                    <div class="form-error">               
                        @if($errors->count('$errors->price') > 0)
                        <ul>
                        @foreach($errors->has('price') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="form-group__input">
                    <div class="form-group__input-label">
                        <label for="">季節</label>
                    </div>
                    <div class="form-group__season-content">
                        <div class="form-group__season-group">
                            <label for="season1">春</label>
                            <input type="checkbox" name="name" id="season1" value="1" >
                        </div>
                        <div class="form-group__season-group">
                            <label for="season2">夏</label>
                            <input type="checkbox" name="name" id="season2" value="2" >
                        </div>
                        <div class="form-group__season-group">
                            <label for="season3">秋</label>
                            <input type="checkbox" name="name" id="season3" value="3" >
                        </div>
                        <div class="form-group__season-group">
                            <label for="season4">冬</label>
                            <input type="checkbox" name="name" id="season4" value="4" >
                        </div>
                    </div>
                    <div class="form-error">
                        @if($errors->has('season_id'))
                        <tr>
                            <td>{{ $errors->first('season_id')}}</td>
                        </tr>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="form-textarea">
            <div class="form-textarea__title">
                <p></p>
            </div>
            <textarea name="description" id="" >{{ $product->description }}</textarea>
            <div class="form-error">               
                @if($errors->count('$errors->price') > 0)
                <ul>
                @foreach($errors->has('price') as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                @endif
            </div>
        </div>
        <div class="form-button">
            <div class="form-button__reset">
                <a href="{{url()->previous()}}"><button type="button">戻る</button></a>
            </div>
            <div class="form-button__submit">
                <button type="submit">変更</button>
            </div>
    </form>
    <form class="form-button__delete" action="./productId:{{$product->id}}/delete" method="post">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <button type="submit"><img src="{{ asset('img/ごみ箱のフリーアイコン.png') }}"></button>
    </form>

</div>

@endsection