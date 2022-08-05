<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>Create Task<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>Create Task</h1>
    <?php echo form_open('/tasks/store') ?>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="">
        </div>
        <button>Save</button>
        <a href="<?php echo site_url('/tasks') ?>">Back</a>
    </form>
<?php $this->endSection(); ?>