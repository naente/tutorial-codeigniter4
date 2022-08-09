<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>登録</h1>
    <?php if (session()->has('warning')) { ?>
        <div class="alert alert-warning" role="alert">
            <?php echo session('warning'); ?>
        </div>
    <?php } ?>
    <?php if (session()->has('errors')) { ?>
        <ul>
            <?php foreach (session('errors') as $error) { ?>
                <li><?php echo $error; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <?php echo form_open('/animals/store'); ?>
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="name" class="form-label">名前</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo old('name', esc($animal['name'])); ?>">
    </div>
    <a class="btn btn-secondary" href="<?php echo site_url('/animals'); ?>">戻る</a>
    <button class="btn btn-primary">登録</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>