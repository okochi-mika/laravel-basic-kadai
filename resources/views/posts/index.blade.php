<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
</head>

<body>
    <h1>投稿一覧</h1>

    @foreach ($posts as $post)
    <div style="margin-bottom: 20px;">
        <h2>{{ $post->title ?? 'タイトル' }}</h2>
        <p>{{ $post->content ?? '本文' }}</p>
    </div>
@endforeach

    
</body>

</html>
