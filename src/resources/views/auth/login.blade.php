@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<body>
  <div class="login-form__content">
    <div class="login-form__heading">
      <h2>login</h2>
    </div>
    <form class="form" action="/login" method="post">
    @csrf
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">パスワード</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" placeholder="例：coachtech1106" value="{{ old('password') }}">
          </div>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
      </div>

      <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
    </form>

    <div class="register__button">
      <a class="register__button-submit" href="/admin"></a>
    </div>
  </div>
</body>
</html>