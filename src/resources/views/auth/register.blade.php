<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会員登録</title>
   <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="register-form__content">
    <div class="register-form__heading">
      <h2>Register</h2>
    </div>
    <form class="form" action="/register" method="post">
      @csrf
        <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="name" placeholder="例：山田太郎" value="{{ old('name') }}">
          </div>
          @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
          </div>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
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
        <button class="form__button-submit" type="submit">登録</button>
      </div>
    </form>

    <div class="login__link">
      <a class="login__button-submit" href="/login"></a>
    </div>
  </div>
</body>
</html>