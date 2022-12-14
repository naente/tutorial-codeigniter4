<?php $this->extend('layouts/wrapper'); ?>
<?php $this->section('title'); ?>詳細<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <div class="container">
        <h1>詳細</h1>
        <?php if (session()->has('info')) { ?>
            <div class="alert alert-info" role="alert">
                <?php echo session('info'); ?>
            </div>
        <?php } ?>
        <?php echo $this->include('Animals/view'); ?>
        <a class="btn btn-secondary" href="<?php echo site_url('/animals'); ?>">戻る</a>
        <a class="btn btn-primary" href="<?php echo site_url('/animals/edit/' . $animal->id); ?>">編集</a>
        <a class="btn btn-danger" href="<?php echo site_url('/animals/delete/' . $animal->id); ?>">削除</a>
    </div>
<?php $this->endSection(); ?>