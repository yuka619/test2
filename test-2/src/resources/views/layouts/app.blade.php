<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="logo-title">mogitate</header>
    <h1>商品一覧</h1>
    <div class="container">
        <div class="sidebar">
            <form action="detail.html" method="get">
                <input type="search"><input type="submit"></input>
            </form>
            <select name="select">
                <option value="商品">価格で並べ替え</option>
            </select>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>