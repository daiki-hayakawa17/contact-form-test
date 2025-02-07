@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<form action="/login">
    <button class="nav__button--submit" type="submit">login</button>
</form>
@endsection


@section('content')

<h2 class="admin__title">
    Admin
</h2>

<div class="admin__content">
    <form class="search__form">
        <div class="search__form-item">
            <input class="search__name" type="text" placeholder="名前やメールアドレスを入力してください">

            <select class="search__jender select_wrapper" name=jender>
                <option value="0" seleced>性別<option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>

            <select class="search__category" name="category">
                <option value="0" selected>お問い合わせの種類</option>
            </select>

            <input class="search__date" type="date">
        </div>

        <div class="search__button">
            <button class="search__button--submit">検索</button>
        </div>

        <div class="reset__button">
            <button class="reset__button--submit">リセット</button>
        </div>
    </form>
</div>

@endsection