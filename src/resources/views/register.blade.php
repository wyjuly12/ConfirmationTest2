@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')


<div class="main-content">
    <form class="regiseter-form" action="/products/register" method="post" enctype="multipart/form-data" >
    @csrf 
        <div class="register-form__title">
            <h2>商品登録</h2>
        </div>
        <div class="register-form__group">
            <div class="register-form__titile">

                <div class="register-form__title-labal">
                    <label for="">商品名<span>必須</span></label>
                </div>
            </div> 
            <div class="register-form__input">
                <input type="text" name="name" id="" value="{{ old('name') }}">
            </div>
            <div class="register-form__error">
                @if($errors->has('name'))
                <tr>
                    <td>
                        {{ $errors->first('name')}}
                    </td>
                </tr>
                @endif
            </div>

        </div>

        <div class="register-form__group">
            <div class="register-form__titile">
                <div class="register-form__title-labal">
                    <label for="">値段<span>必須</span></label>
                </div> 
            </div>
            <div class="register-form__input">
                <input type="text" name="price" id="" value="{{ old('price') }}">
            </div>
            <div class="register-form__error">
                @if($errors->has('price'))
                <tr>
                    @foreach($errors->get('price') as $error)
                    <td>{{ $error }}</td>
                    @endforeach
                </tr>
                @endif
            </div>
        </div>


        <div class="register-form__group">
            <div class="register-form__titile">
                <div class="register-form__title-labal">
                    <label for="">商品画像<span>必須</span></label>
                </div>
            </div>                 
            <div class="register-form__file">
                <input type="file" name="image" id="" value="{{ old('image') }}">
            </div>
            <div class="register-form__error">
                @if($errors->has('image'))
                <tr>
                    @foreach($errors->get('image') as $error)
                    <td>{{ $error }}</td>
                    @endforeach
                </tr>
                @endif
            </div>
        </div>

        <div class="register-form__group">
            <div class="register-form__titile">
                <div class="register-form__title-labal">
                    <label for="">季節<span>必須</span></label>
                </div>
            </div>          
            <div class="register-form__checkbox">
                <div class="register-form__checkbox-group">
                    <label for="season1">春
                        <input type="checkbox" name="season_id" id="season1" value="1" {{old('season_id')==1  ? 'checked' : '' }}>
                    </label>
                </div>
                <div class="register-form__checkbox-group">
                    <label for="season2">夏
                        <input type="checkbox" name="season_id" id="season2" value="2" {{old('season_id')==2  ? 'checked' : '' }}>
                    </label>
                    </div>
                <div class="register-form__checkbox-group">
                    <label for="season3">秋
                        <input type="checkbox" name="season_id" id="season3" value="3" {{old('season_id')==3 ? 'checked' : '' }}>
                    </label>
                </div>
                <div class="register-form__checkbox-group">
                    <label for="season4">冬
                        <input type="checkbox" name="season_id" id="season4" value="4" {{old('season_id')==4 ? 'checked' : '' }}>
                    </label>
                </div>
            </div> 
            <div class="register-form__error">
                @if($errors->has('season_id'))
                <tr>
                    <td>
                        {{ $errors->first('season_id')}}
                    </td>
                </tr>
                @endif
            </div> 
        </div>

        <div class="register-form__group">
            <div class="register-form__titile">
                <div class="register-form__title-labal">
                    <label for="">商品説明<span>必須</span></label>
                </div>
            </div>
            <div class="register-form__input">    
                <textarea name="description" id="" >{{old('description')}}</textarea>
            </div>
            <div class="register-form__error">
                @if($errors->has('description'))
                <tr>
                    <td>
                        {{ $errors->first('description')}}
                    </td>
                </tr>
                @endif
            </div> 
        </div>
            
        <div class="register-form__button">
            <div class="register-form__button-reset">
                <a href="{{url()->previous()}}"><button type="button">戻る</button></a>
            </div>
            <div class="register-form__button-submit">
                <button type="submit">登録</button>
            </div>
        </div>                          
    </form>
</div>
@endsection