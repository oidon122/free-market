@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
  <div class="form">
    <h2 class="form-title">ログイン</h2>
  </div>
  <div class="form__group">
    <form class="login" action="/login" method="post">
      @csrf
      <div class="form__input">
        <label for="email">ユーザー名/メールアドレス</label>
        <input class="form__input-user" type="email" name="email" value="{{ old('email') }}">
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__input">
        <label for="email">パスワード</label>
        <input class="form__input-user" type="password" name="password">
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
      <input class="form__button" type="submit" value="ログインする">
    </form>
  </div>
  <div class="user-link">
    <a class="link" href="/register">会員登録はこちら</a>
  </div>
@endsection