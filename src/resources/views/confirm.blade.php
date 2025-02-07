@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection


@section('content')
<?php print_r($contact)?>
<h2 class="confirm__title">Confirm</h2>

<form class="form">

    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お名前
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                    <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    性別
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    メールアドレス
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    電話番号
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    住所
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    建物名
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お問い合わせの種類
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
                </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header-last">
                    お問い合わせ内容
                </th>
                <td class="confirm-table__text">
                    <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
                </td>
            </tr>
        </table>
    </div>

    <div class="form__button">
        <button class="form__button-submit">
            送信
        </button>

        <a class="correction" href="/">修正</a>
    </div>

    
</form>



@endsection