<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Create Task<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Create Task</h1>
    <?php if (session()->has('errors')) { ?>
    <ul>
        <?php foreach (session('errors') as $error) { ?>
            <li><?php echo $error; ?></li>
        <?php } ?>
    </ul>
    <?php } ?>
    <?php echo form_open('/tasks/store') ?>
        <?php echo csrf_field(); ?>
        <?php echo $this->include('Tasks/form'); ?>
        <button>Save</button>
        <a href="<?php echo site_url('/tasks') ?>">Back</a>
    </form>
<?php $this->endSection(); ?>