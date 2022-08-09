<div class="mb-3">
    <label for="name" class="form-label">名前</label>
    <input type="text" class="form-control" name="name" id="name"
           value="<?php echo old('name', esc($animal->name)); ?>">
    <label for="name" class="form-label">価格</label>
    <input type="text" class="form-control" name="price" id="price"
           value="<?php echo old('price', $animal->price); ?>">
</div>