<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php $this->renderSection('title'); ?></title>
</head>
<body>
    <?php if (session()->has('warning')) { ?>
        <div class="warning"><?php echo session('warning'); ?></div>
    <?php } ?>

    <?php if (session()->has('info')) { ?>
        <div class="info"><?php echo session('info'); ?></div>
    <?php } ?>

    <?php $this->renderSection('content'); ?>
</body>
</html>