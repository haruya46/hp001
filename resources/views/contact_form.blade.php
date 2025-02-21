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
    <p>名前：{{$inputs['name']}}</p>
    <p>メールアドレス：{{$inputs['email']}}</p>
    <p>電話番号：{{$inputs['tel']}}</p>
    @if(isset($inputs['content']))
    <p>お問い合わせ内容：{{$inputs['content']}}</p>
    @endif

    @if(isset($inputs['genre']))
    <p>応募職種：{{$inputs['genre']}}</p>
    @endif

    @if(isset($inputs['file']))
    <?php 
        // ファイル名を取得
        $fileName = $inputs['file']; 
        dd($fileName;);
    ?>
    <p>添付ファイル：<a href="{{ asset('storage/' . $fileName ) }}" target="_blank">ダウンロード</a></p>
    @endif



</body>
</html>