<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Edit Task<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Edit Task</h1>
    <?php if (session()->has('errors')) { ?>
    <ul>
        <?php foreach (session('errors') as $error) { ?>
            <li><?php echo $error; ?></li>
        <?php } ?>
    </ul>
    <?php } ?>
    <?php echo form_open('/tasks/' . $task['id'] . '/update') ?>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="<?php echo old('description', esc($task['description'])); ?>">
        </div>
        <button>Save</button>
        <a href="<?php echo site_url('/tasks/' . $task['id']) ?>">Back</a>
    </form>
<?php $this->endSection(); ?>