<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>投稿詳細</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
            <form action="{{ route('logout') }}" id="logout-form" method="post">
                @csrf
            </form>
        </nav>
    </header>

    <main>
        <h1>投稿詳細</h1>
        <a href="{{ route('posts.index') }}">&lt; 戻る</a>

        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </article>
    </main>

    <footer>
        <p>&copy; 投稿アプリ All rights reserved.</p>
    </footer>
    
</body>

</html>