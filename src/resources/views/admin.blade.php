<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>FashionablyLate</title>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>FashionablyLate</h1>
            <div class="admin-header">
                <a href="/register">logout</a>
                <div class="admin">Admin</div>
            </div>
        </div>

        <div class="search-form">
            <form>
                <input type="text" name="query" placeholder="名前やメールアドレスを入力してください">
                <select name class="gender">
                    <option value="">性別</option>
                    <option value="male">男性</option>
                    <option value="female">女性</option>
                </select>
                <select name="inquiry_type">
                    <option value="">お問い合わせの種類</option>
                    <option value="product_exchange">商品の交換について</option>
                    <option value="other">その他</option>
                </select>
                <input type="date" name="date">
                <button type="submit" class="search-btn">検索</button>
                <button type="reset" class="reset-btn">リセット</button>
            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th>詳細</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>山田 太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="detail-btn">詳細</button></td>
                    </tr>
                    <!-- 他のデータ行 -->
                </tbody>
            </table>
            <div class="pagination">
                <button>&lt; 前</button>
                <span>1 2 3 4 5</span>
                <button>次 &gt;</button>
            </div>
        </div>
    </div>


</body>

</html>