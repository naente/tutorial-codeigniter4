<?php $this->extend('layouts/wrapper'); ?>
<?php $this->section('title'); ?>一覧<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
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
                        <a href="<?php echo site_url('/animals/show/' . $animal->id); ?>">
                            <?php echo esc($animal->name); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php $this->endSection(); ?>