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
    <p>名前：<?php echo e($inputs['name']); ?></p>
    <p>メールアドレス：<?php echo e($inputs['email']); ?></p>
    <p>電話番号：<?php echo e($inputs['tel']); ?></p>
    <?php if(isset($inputs['content'])): ?>
    <p>お問い合わせ内容：<?php echo e($inputs['content']); ?></p>
    <?php endif; ?>

    <?php if(isset($inputs['genre'])): ?>
    <p>応募職種：<?php echo e($inputs['genre']); ?></p>
    <?php endif; ?>

    <?php if(isset($inputs['file'])): ?>
    <?php 
        // ファイル名を取得
        $fileName = $inputs['file']; 
        dd($fileName;);
    ?>
    <p>添付ファイル：<a href="<?php echo e(asset('storage/' . $fileName )); ?>" target="_blank">ダウンロード</a></p>
    <?php endif; ?>



</body>
</html><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/contact_form.blade.php ENDPATH**/ ?>