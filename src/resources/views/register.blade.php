@extends('layouts.app1')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
<title>FashionablyLate - Register</title>

@section('header')
<a div class="header" href="/login">login</a>
@endsection

@section('content')
<h2>Register</h2>
<div class="login-box">
    <form action="/admin" method="POST">
        @csrf
        @error('name')
        {{ $message }}
        @enderror
        <label for="name">お名前</label>
        <input type="text" name="name" id="name" placeholder="例: 山田太郎" required value="{{ old('name') }}" />
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" placeholder="例: test@example.com"
            required value="{{ old('email') }}" />

        <label for="password">パスワード</label>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <input type="password" name="password" id="password" placeholder="例: coachtechno6" required value="{{ old('password') }}" />

        <button type="submit">登録</button>
    </form>
</div>
@endsection

</html>