@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@section('button')
<form action="/register">
    <button class="nav__button--submit" type="submit">register</button>
</form>
@endsection


@section('content')
<div class="login__content">
    
    <div class="login-form__heading">
        <h2 class="login-form__heading--logo">
            Login
        </h2>
    </div>

    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__inner">
            <div class="form__group-first">
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
                ログイン
            </button>
        </div>
    </form>
</div>
@endsection