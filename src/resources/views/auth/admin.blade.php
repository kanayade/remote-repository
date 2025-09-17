@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-form__content">
    <div class="admin-form__heading">
        <h2>Admin</h2>
    </div>
    <form action="/search" method="get">
        <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" />
    </form>
        <div class="search-tab">
            <select class="gender-search">性別</select>
            <select class="category_id-search">お問い合わせの種類</select>
            <select class="date-search">年/月/日</select>
            <button type="submit">検索</button>
            <button type="reset">リセット</button>
        </div>
