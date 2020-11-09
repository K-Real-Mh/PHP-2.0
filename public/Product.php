<?php	
class Product {
	protected $id;
	protected $name;
	protected $price;

	public function __construct($id, $name, $price)
	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}

	public function changePrice($price)
	{
		$this->price = $price;
	}

	public function addToCart()
	{
		echo "<p>Продукт добавлен в корзину</p>";
	}	
}

