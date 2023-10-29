<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo create</title>
</head>
<body>
    <h1>新規論文投稿</h1>
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>

        <input type="submit" value="投稿">
    </form>
</body>
</html>
