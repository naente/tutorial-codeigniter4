<?php $this->extend('layouts/wrapper'); ?>
<?php $this->section('title'); ?>削除<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <div class="container">
        <h1>削除</h1>
        <p>本当に削除しますか？</p>
        <?php echo $this->include('Animals/view'); ?>
        <?php echo form_open('/animals/delete/' . $animal['id']); ?>
        <?php echo csrf_field(); ?>
        <a class="btn btn-secondary" href="<?php echo site_url('/animals/show/' . $animal['id']); ?>">いいえ</a>
        <button class="btn btn-danger">はい</button>
        </form>
    </div>
<?php $this->endSection(); ?>