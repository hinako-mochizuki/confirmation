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
    <header>
    
    </header>
    
    <div class="contact-container">
        <h1 class="contact-title">Contact</h1>
        <form class="contact-form" action="/contact/confirm" method="post" >
        @csrf
            <div class="form-group">
                <label>お名前 <span class="required">※</span></label>
                <div class="form-row">
                    <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}">
                    <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}">
                </div>
                @error('last_name')
                    <div class="error">{{ $message }}</div>
                @enderror
                @error('first_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>性別 <span class="required">※</span></label>
                <div class="form-radio">
                    <label><input type="radio" name="gender" value="男性" @if(old('gender') == '男性') checked @endif> 男性</label>
                    <label><input type="radio" name="gender" value="女性" @if(old('gender') == '女性') checked @endif> 女性</label>
                    <label><input type="radio" name="gender" value="その他" @if(old('gender') == 'その他') checked @endif> その他</label>
                </div>
                @error('gender')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>メールアドレス <span class="required">※</span></label>
                <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>電話番号 <span class="required">※</span></label>
                <div class="form-row">
                    <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}">
                    <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
                    <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
                </div>
                @error('tel1')
                    <div class="error">{{ $message }}</div>
                @enderror
                @error('tel2')
                    <div class="error">{{ $message }}</div>
                @enderror
                @error('tel3')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>住所 <span class="required">※</span></label>
                <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>建物名</label>
                <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}">
            </div>

            <div class="form-group">
                <label>お問い合わせの種類 <span class="required">※</span></label>
                <select name="category_id">
                    <option value="">選択してください</option>
                    <option value="商品のお届けついて" @if(old('category_id') == '商品のお届けについて') selected @endif>商品のお届けについて</option>
                    <option value="商品の交換について"@if(old('category_id') == '商品の交換について') selected @endif>商品の交換について</option>
                    <option value="商品トラブル"@if(old('category_id') == '商品トラブル') selected @endif>商品トラブル</option>
                    <option value="ショップへのお問い合わせ" @if(old('category_id') == 'ショップへのお問い合わせ') selected @endif>ショップへのお問い合わせ</option>
                    <option value="その他" @if(old('category_id') == 'その他') selected @endif>その他</option>
                </select>
                @error('category_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>お問い合わせ内容 <span class="required">※</span></label>
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                @error('detail')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-button">
                <button type="submit">確認画面</button>
            </div>
        </form>
    </div>

</body>
</html>