<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="contact-container">
        <h1 class="contact-title">Contact</h1>
        <form class="contact-form" action="/contact/confirm" method="post" >
        @csrf
            <div class="form-group">
                <label>お名前 <span class="required">※</span></label>
                <div class="form-row">
                    <input type="text" name="last_name" placeholder="例：山田">
                    <input type="text" name="first_name" placeholder="例：太郎">
                </div>
            </div>

            <div class="form-group">
                <label>性別 <span class="required">※</span></label>
                <div class="form-radio">
                    <label><input type="radio" name="gender" value="男性"> 男性</label>
                    <label><input type="radio" name="gender" value="女性"> 女性</label>
                    <label><input type="radio" name="gender" value="その他"> その他</label>
                </div>
            </div>

            <div class="form-group">
                <label>メールアドレス <span class="required">※</span></label>
                <input type="email" name="email" placeholder="例：test@example.com">
            </div>

            <div class="form-group">
                <label>電話番号 <span class="required">※</span></label>
                <div class="form-row">
                    <input type="text" name="tel1" placeholder="080">
                    <input type="text" name="tel2" placeholder="1234">
                    <input type="text" name="tel3" placeholder="5678">
                </div>
            </div>

            <div class="form-group">
                <label>住所 <span class="required">※</span></label>
                <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
            </div>

            <div class="form-group">
                <label>建物名</label>
                <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101">
            </div>

            <div class="form-group">
                <label>お問い合わせの種類 <span class="required">※</span></label>
                <select name="category">
                    <option value="">選択してください</option>
                    <option value="商品について">商品について</option>
                    <option value="注文について">注文について</option>
                    <option value="その他">その他</option>
                </select>
            </div>

            <div class="form-group">
                <label>お問い合わせ内容 <span class="required">※</span></label>
                <textarea name="message" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>

            <div class="form-button">
                <button type="submit">確認画面</button>
            </div>
        </form>
    </div>

</body>
</html>