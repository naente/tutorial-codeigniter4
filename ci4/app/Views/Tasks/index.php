<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Tasks<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Tasks</h1>
    <a href="<?php echo site_url('/tasks/create') ?>">Create Task</a>
    <ul>
        <?php foreach ($tasks as $task) { ?>
            <li>
                <a href="<?php echo site_url('/tasks/' . $task['id']) ?>">
                    <?php echo esc($task['description']); ?>
                </a>
            </li>
        <?php } ?>
    </ul>
<?php $this->endSection(); ?>