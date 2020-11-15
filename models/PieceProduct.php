<?php

namespace app\models;


class PieceProduct extends AbstractProduct
{
	public function getFinalPrice(int $price) : int
	{
		return $price;
	}

}