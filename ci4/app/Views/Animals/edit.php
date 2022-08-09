<?php $this->extend('layouts/wrapper'); ?>
<?php $this->section('title'); ?>編集<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <div class="container">
        <h1>編集</h1>
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
        <?php echo form_open('/animals/update/' . $animal['id']); ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">名前</label>
            <input type="text" class="form-control" name="name" id="name"
                   value="<?php echo old('name', esc($animal['name'])); ?>">
        </div>
        <a class="btn btn-secondary" href="<?php echo site_url('/animals/show/' . $animal['id']); ?>">戻る</a>
        <button class="btn btn-primary">更新</button>
        </form>
    </div>
<?php $this->endSection(); ?>