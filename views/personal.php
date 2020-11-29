<h1>Приветствую <?= $user->login ?></h1>
	<p>Ваши права пользователя: <?= $user->title ?></p>

<?php
if ($user->title  == 'admin') :
?>
<a href="../admin">Админка</a>
<? endif ?>
<a href="/">Продукты</a>
<a href="/basket">Корзина</a>

<form action="/?c=user&a=exit" method="post">
<input type="submit" value="Выход" name="exit">
</form>