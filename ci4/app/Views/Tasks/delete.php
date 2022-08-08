<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Delete Task<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Delete Task</h1>
    <p>Are you sure?</p>
    <?php echo form_open('/tasks/' . $task->id . '/delete') ?>
        <button>Yes</button>
        <a href="<?php echo site_url('/tasks/' . $task->id) ?>">Cancel</a>
    </form>
<?php $this->endSection(); ?>