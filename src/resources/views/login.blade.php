@extends('layouts.app1')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<title>FashionablyLate - Login</title>

@section('header')
<a div class="header1" href="/register">register</a>
@endsection

@section('content')

<h2>Login</h2>
<div class="login-box">
  <form class="form" action="/login" method="post">
    @csrf
    <div class="form__error">
      <!--バリデーション機能を実装したら記述します。-->
      @error('email')
      {{ $message }}
      @enderror
    </div>
    <label for="email">メールアドレス</label>
    <input type="email" name="email" id="email" placeholder="例: test@example.com" required>
    <div class="form__error">
      <!--バリデーション機能を実装したら記述します。-->
      @error('password')
      {{ $message }}
      @enderror

    </div>
    <label for="password">パスワード</label>
    <input type="password" name="password" id="password" placeholder="例: coachtechno6" required>

    <button class="button1" type="submit">ログイン</button>
  </form>

</div>
</div>
</div>
@endsection