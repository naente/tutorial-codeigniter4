<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Task<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Task</h1>
    <a href="<?php echo site_url('/tasks') ?>">Back</a>
    <dl>
        <dt>ID</dt>
        <dd><?php echo $task->id; ?></dd>
        <dt>Description</dt>
        <dd><?php echo esc($task->description); ?></dd>
        <dt>Created at</dt>
        <dd><?php echo $task->created_at; ?></dd>
        <dt>Updated at</dt>
        <dd><?php echo $task->updated_at; ?></dd>
    </dl>
    <a href="<?php echo site_url('/tasks/' . $task->id . '/edit') ?>">Edit</a>
    <a href="<?php echo site_url('/tasks/' . $task->id . '/delete') ?>">Delete</a>
<?php $this->endSection(); ?>