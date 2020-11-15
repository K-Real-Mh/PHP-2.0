<?php

namespace app\models;


abstract class AbstractProduct
{
	protected $id;
	protected $name;
	protected $normalPrice;
	protected $finalPrice;
	protected $kg;

	public function __construct($id, $name, $normalPrice, $kg)
	{
		$this->id = $id;
		$this->name = $name;
		$this->normalPrice = $normalPrice;
		$this->kg = $kg;
		$this->finalPrice = $this->getFinalPrice($this->normalPrice);
	}

	abstract protected function getFinalPrice(int $price) : int;

}
