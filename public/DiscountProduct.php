<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require PUBLIC_DIR . "Product.php";

class DiscountProduct extends Product {
	protected $discount;
	protected $finalPrice;

	private function  discount()
	{
		$this->finalPrice = $this->price - ($this->price * $this->discount / 100);
	}

	public function __construct($id, $name, $price, $discount)
	{
		parent::__construct($id, $name, $price);
		var_dump($this->id);
		$this->discount = $discount;
		$this->discount();
	}
	public function test() {
		echo "<p>{$this->finalPrice}</p>";
	}
}
