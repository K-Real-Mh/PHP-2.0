<?php /** @var \app\models\Product $model */?>
<h1><?= $model->name?></h1>
<h2><?= $model->price?></h2>
<h2><?= $model->description?></h2>
<form action="/?c=basket&a=add" method="post">
<input type="hidden" value="<?= $model->id ?>" name = "id">
<input type="number" value="0" name="qty">
<input type="submit" value="добавить">
</form>