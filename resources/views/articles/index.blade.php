<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article index</title>
</head>
<body>
    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <!-- // リンク先をidで取得し名前で出力 -->
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a><br>
        @endforeach
    </ul>
</body>
</html>
