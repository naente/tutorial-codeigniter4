<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Tasks<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task) { ?>
            <li>
                <?php echo $task['id']; ?>
                <?php echo $task['description']; ?>
            </li>
        <?php } ?>
    </ul>
<?php $this->endSection(); ?>