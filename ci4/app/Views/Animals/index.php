<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>一覧</h1>
    <?php if (session()->has('info')) { ?>
        <div class="alert alert-info" role="alert">
            <?php echo session('info'); ?>
        </div>
    <?php } ?>
    <a class="btn btn-primary" href="<?php echo site_url('/animals/create'); ?>">新規登録</a>
    <div class="mt-3">
        <ul>
            <?php foreach ($animals as $animal) { ?>
                <li>
                    <a href="<?php echo site_url('/animals/show/' . $animal['id']); ?>">
                        <?php echo esc($animal['name']); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>