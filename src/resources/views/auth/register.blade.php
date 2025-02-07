@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
<form action="/login">
    <button class="nav__button--submit" type="submit">login</button>
</form>
@endsection


@section('content')
<div class="register__content">
    
    <div class="register-form__heading">
        <h2 class="register-form__heading--logo">
            Register
        </h2>
    </div>

    <form class="form" action="register" method="post">
        @csrf
        <div class="form__inner">
            <div class="form__group-first">
                <div class="form__group-title">
                    <span class="form__label--item">
                        お名前
                    </span>
                </div>
                <div class="form__group-content">
                    <input class="form__input--text" type="text" name="name" value="{{ old('name') }}" placeholder="例:山田  太郎">    
                </div>
            </div>
        
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">
                        メールアドレス
                    </span>
                </div>
                <div class="form__group-content">
                    <input class="form__input--text"  type="text" name="email" value="{{ old('email') }}" placeholder="例:test@example.com">
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">
                        パスワード
                    </span>
                </div>
                <div class="form__group-content">
                    <input class="form__input--text" type="text" name="password" value="{{ old('password') }}" placeholder="例: coachtech1106">
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button--submit">
                登録
            </button>
        </div>
    </form>
</div>
@endsection