<?php

namespace app\models;


class DigitalProduct extends AbstractProduct
{
	public function getFinalPrice(int $price) : int
	{
		$price = $price * $this->kg;
		return $price;
	}

}