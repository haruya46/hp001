<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせを受け付けました</title>
</head>
<body>
    <p>お問い合わせ内容は次のとおりです。</p>
    ーーーー
    <p>お名前：{{ $data['name'] }}</p>
    <p>メール：{{ $data['email'] }}</p>
    <p>電話番号：{{ $data['tel'] }}</p>
    @if(!empty($data['employment']) && $data['employment'] !== '選択なし')
        <p>雇用形態：{{ $data['employment'] }}</p>
    @endif
    @if(!empty($data['genre']) && $data['genre'] !== '選択なし')
        <p>応募職種：{{ $data['genre'] }}</p>
    @endif
    @if(!empty($data['content']))
    <p>お問い合わせ内容：<br>{!! nl2br(e($data['content'])) !!}</p>
    @endif



</body>
</html>