<?php

namespace app\models;

class Cart extends Model
{
	public $productsIds;
	public $products;
	public $basket;

	public function __construct()
	{
		$this->productsIds = array_keys($_SESSION['basket']);
		$this->products = $this->getAll($this->productsIds);
		$this->basket = $this->getBasket($this->products);
	}

	protected function getBasket(array $products): array
	{
		$basket = [];
		foreach ($products as $product) {
			$basket[] = [
				'product' => $product,
				'qty' => $_SESSION['basket'][$product['id']]
			];
		}
		return $basket;
	}


	public function getTableName(): string
	{
		return "products";
	}
}
