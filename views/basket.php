<style>
	table {
		border-collapse: collapse;
	}

	td {
		padding: 2px 4px;
		border: 1px solid black;
	}
</style>
<form action="personal/add" method="post">
<table>
	<?php foreach ($basket as $item) :  ?>
		<tr>
			<td>
				id :<?= $item['product']->id ?>
			</td>
			<td>
				<a href="product.php?id=<?= $item['product']->id ?>">
					<?= $item['product']->name ?>
				</a>
			</td>
			<td>
				<?= $item['qty'] ?> шт.
			</td>
			<td>
				Цена за шт. <?= $item['product']->price ?> 
			</td>
			<td>
				Сумма <?= $item['product']->price * $item['qty'] ?> 
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<input type="submit" value="Заказать">
</form>