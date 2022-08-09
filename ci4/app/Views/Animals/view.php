<dl>
    <dt>ID</dt>
    <dd><?php echo $animal->id; ?></dd>
    <dt>名前</dt>
    <dd><?php echo esc($animal->name); ?></dd>
    <dt>価格</dt>
    <dd><?php echo $animal->price; ?></dd>
    <dt>作成日時</dt>
    <dd><?php echo $animal->created_at; ?></dd>
    <dt>更新日時</dt>
    <dd><?php echo $animal->updated_at; ?></dd>
</dl>