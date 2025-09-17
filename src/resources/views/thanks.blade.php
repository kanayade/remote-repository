@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__background-text">
        <h1>Thank you</h1>
    </div>
    <div class="thanks__heading">
        <h2>お問い合わせありがとうございました</h2>
    </div>
    <a href="/" class="btn">HOME</a>
</div>
@endsection