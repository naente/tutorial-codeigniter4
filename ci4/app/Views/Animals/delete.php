<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>削除</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>削除</h1>
    <p>本当に削除しますか？</p>
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
    <?php echo form_open('/animals/delete/' . $animal['id']); ?>
    <?php echo csrf_field(); ?>
    <a class="btn btn-secondary" href="<?php echo site_url('/animals/show/' . $animal['id']); ?>">いいえ</a>
    <button class="btn btn-danger">はい</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>