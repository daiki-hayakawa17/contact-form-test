@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<h2 class="contact__title">Contact</h2>

<div class="form">
    <form class="contact__form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title--name">
                <span class="form__label--item">お名前<span class="form__label--required">※</span></span>
            </div>

            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="form__input--first" type="text" name="first_name" placeholder="例:山田">
                    <input class="form__input--last" type="text" name="last_name" placeholder="例:太郎">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title--gender">
                <span class="form__label--item">性別<span class="form__label--required">※</span></span>
                
            </div>

            <div class="form__group-content">
                <input class="men-radio radio" type="radio" name="gender" value="1" checked>
                <span class="form__radio--text">男性</span>
                <input class="lady-radio radio" type="radio" name="gender" value="2">
                <span class="form__radio--text">女性</span>
                <input class="etc-radio radio" type="radio" name="gender" value="3">
                <span class="form__radio--text">その他</span>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title--email">
                <span class="form__label--item">メールアドレス<span class="form__label--required">※</span></span>
            </div>

            <div class="form__group-content">
                <input class="form__email" type="text" name="email" placeholder="例:test@example.com">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title--tel">
                <span class="form__label--item">電話番号<span class="form__label--required">※</span></span>
            </div>

            <div class="form__group-content--tel">
                <input class="form__tel-first" type="text" name="tel" placeholder="080">
                <span>-</span>
                <input class="form__tel" type="text" name="tel" placeholder="1234">
                <span>-</span>
                <input class="form__tel-last" type="text" name="tel" placeholder="5678">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title--address">
                <span class="form__label--item">住所<span class="form__label--required">※</span></span>
            </div>

            <div class="form__group-content">
                <input class="form__address" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title--building">
                <div class="form__label--item">建物名</div> 
            </div>

            <div class="form__group-content">
                <input class="form__building" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title--category">
                <span class="form__label--item">お問い合わせの種類<span class="form__label--required">※</span></span>
            </div>

            <div class="form__group-content">
                <select name="content" class="form__category" >
                    <option value="0" disabled selected>選択してください</option>
                    @foreach ($contents as $content)
                    <option name="content" value="{{ $content->content }}">{{ $content->content }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title--contact">
                <span class="form__label--item">お問い合わせ内容<span class="form__label--required">※</span></span>
            </div>

            <div class="form__group-content">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button--submit" action="/confirm" method="post">確認画面</button>
        </div>
    </form>
</div>
@endsection