@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<main>
    <div class="confirm__content">
        <div class="confirm__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/thanks" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            {{ $contact['last_name'] }} {{ $contact['first_name'] }}
                            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                        @if ($contact['gender'] == 1)男性
                        @elseif ($contact['gender'] == 2)女性
                        @elseif ($contact['gender'] == 3)その他
                        @endif
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            {{ $contact['email'] }}
                            <input type="hidden" name="email" value="{{ $contact['email'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            {{ $tel }}
                            <input type="hidden" name="tel0" value="{{ $tel0 }}">
                            <input type="hidden" name="tel1" value="{{ $tel1 }}">
                            <input type="hidden"name="tel2" value="{{ $tel2 }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__heading">住所</th>
                        <td class="confirm-table__text">
                            {{ $contact['address'] }}
                            <input type="hidden" name="address" value="{{ $contact['address'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__heading">建物名</th>
                        <td class="confirm-table__text">
                            {{ $contact['building'] }}
                            <input type="hidden" name="building" value="{{ $contact['building'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__heading">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            @if ($contact['category_id'] == 1)商品のお届けについて
                            @elseif ($contact['category_id'] == 2)商品の交換について
                            @elseif ($contact['category_id'] == 3)商品トラブル
                            @elseif ($contact['category_id'] == 4)ショップへのお問い合わせ
                            @elseif ($contact['category_id'] == 5)その他
                            @endif
                            <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__heading">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            {{ $contact['detail'] }}
                            <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-entry" type="submit">送信</button>
            </div>
        </form>
    </div>
</main>
@endsection