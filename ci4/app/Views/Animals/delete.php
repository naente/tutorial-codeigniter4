<?php $this->extend('layouts/wrapper'); ?>
<?php $this->section('title'); ?>削除<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
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
<?php $this->endSection(); ?>