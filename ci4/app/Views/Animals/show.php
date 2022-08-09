<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>詳細</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>詳細</h1>
    <?php if (session()->has('info')) { ?>
        <div class="alert alert-info" role="alert">
            <?php echo session('info'); ?>
        </div>
    <?php } ?>
    <dl>
        <dt>ID</dt>
        <dd><?php echo $animal['id']; ?></dd>
        <dt>名前</dt>
        <dd><?php echo esc($animal['name']); ?></dd>
        <dt>作成日時</dt>
        <dd><?php echo $animal['created_at']; ?></dd>
        <dt>更新日時</dt>
        <dd><?php echo $animal['updated_at']; ?></dd>
    </dl>
    <a class="btn btn-secondary" href="<?php echo site_url('/animals'); ?>">戻る</a>
    <a class="btn btn-primary" href="<?php echo site_url('/animals/edit/' . $animal['id']); ?>">編集</a>
    <a class="btn btn-danger" href="<?php echo site_url('/animals/delete/' . $animal['id']); ?>">削除</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>