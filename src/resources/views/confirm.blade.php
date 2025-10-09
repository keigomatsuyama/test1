@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

  <title>FashionablyLate</title>
  @section('subtitle')
  <h2 class="subtitle">Confirm</h2>
  @endsection
<body>
@section('content')
  <div class="form-container">
    <form action="/thanks" method="POST">
      @csrf
    <table>
      <tr>
        <th>お名前</th>
        <td></td>
      </tr>
      <tr>
        <th>性別</th>
        <td></td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td></td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td></td>
      </tr>
      <tr>
        <th>住所</th>
        <td></td>
      </tr>
      <tr>
        <th>建物名</th>
        <td></td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td></td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td></td>
      </tr>
    </table>

    <div class="btn-container">
      <button class="btn btn-submit" type="submit">送信</button>
  </form>
<form action="/confirm" method="GET">
      @csrf
      <div class="btn btn-edit"href="/confirm">修正</div>
    </form>
    </div>
  </div>
</body>
@endsection
