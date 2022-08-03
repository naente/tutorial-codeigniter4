<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Task<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Task</h1>
    <dl>
        <dt>ID</dt>
        <dd><?php echo $task['id']; ?></dd>
        <dt>Description</dt>
        <dd><?php echo $task['description']; ?></dd>
        <dt>Created at</dt>
        <dd><?php echo $task['created_at']; ?></dd>
        <dt>Updated at</dt>
        <dd><?php echo $task['updated_at']; ?></dd>
    </dl>
<?php $this->endSection(); ?>