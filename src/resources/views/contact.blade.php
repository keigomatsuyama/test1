@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

<title>FashionablyLate</title>

@section('subtitle')
  <h2 class="subtitle">Contact</h2>
@endsection

@if ($errors->any())
  <p style="color:red;">入力に問題があります</p>
@endif

@section('content')
<form action="/confirm" method="POST">
  @csrf

  {{-- 名前（姓） --}}
  <div>
    <label for="name">お名前<span class="required">※</span></label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="例: 山田"required>
    @error('name')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- 名前（名） --}}
  <div>
    <label for="name1">お名前(名) <span class="required">※</span></label>
    <input type="text" name="name1" id="name1" value="{{ old('name1') }}" placeholder="例: 太郎"required>
    @error('name1')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- 性別 --}}
  <div>
    <label>性別 <span class="required">※</span></label><br>
    <input type="radio" name="gender" value="male" {{ old('gender')=='male' ? 'checked' : '' }}required> 男性
    <input type="radio" name="gender" value="female" {{ old('gender')=='female' ? 'checked' : '' }}required> 女性
    <input type="radio" name="gender" value="other" {{ old('gender')=='other' ? 'checked' : '' }}required> その他
    @error('gender')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- メール --}}
  <div>
    <label for="email">メールアドレス <span class="required">※</span></label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="例: test@example.com"required>
    @error('email')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- 電話番号 --}}
  <div>
    <label for="phone">電話番号 <span class="required">※</span></label>
    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="08012345678"required>
    @error('phone')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- 住所 --}}
  <div>
    <label for="address">住所 <span class="required">※</span></label>
    <input type="text" name="address" id="address" value="{{ old('address') }}" placeholder="例: 東京都渋谷区1-2-3"required>
    @error('address')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- 建物名 --}}
  <div>
    <label for="building">建物名 <span class="required">※</span></label>
    <input type="text" name="building" id="building" value="{{ old('building') }}" placeholder="例: 千駄ヶ谷マンション101"required>
    @error('building')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- お問い合わせの種類 --}}
  <div>
    <label for="content">お問い合わせの種類 <span class="required">※</span></label>
    <select name="content" id="content">
      <option value="" hidden>選択してください</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ old('content')==$category->id ? 'selected' : '' }}>
          {{ $category->content }}
        </option>
      @endforeach
    </select>
    @error('content')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  {{-- お問い合わせ内容 --}}
  <div>
    <label for="content1">お問い合わせ内容 <span class="required">※</span></label>
    <textarea name="content1" id="content1" placeholder="例: お問い合わせ内容をご記載ください"required>{{ old('content1') }}</textarea>
    @error('content1')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="submit">
    <button type="submit">確認画面</button>
  </div>
</form>
@endsection
