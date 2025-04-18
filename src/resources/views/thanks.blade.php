<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    <div class="thank-wrapper">
        <div class="thank-background">Thank you</div>

        <div class="thank-content">
            <p class="thank-message">お問い合わせありがとうございました</p>
            <a href="{{ url('/') }}" class="home-button">HOME</a>
        </div>
    </div>
</body>
</html>