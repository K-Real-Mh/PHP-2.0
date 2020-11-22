<ul class="galary">
			<?php
			foreach ($products as $item) :
			?>
				<li class="galary__photo">
					<a href="/?c=product&a=card&id=<?=$item->id?>">
						<h2><?=$item->name?></h2>
						<p><?=$item->price?></p>
					</a>
				</li>
			<? endforeach;?>
</ul>