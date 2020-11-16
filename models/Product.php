<?php

namespace app\models;

use app\services\Db;

class Product extends Model
{
	public $id;
	public $name;
	public $description;
	public $price;
	public $categoryId;

	public function updateProduct()
	{
		$sql = "UPDATE {$this->tableName} SET price = :price, name = :name, description = :description   WHERE id = :id";
		return $this->db->execute($sql, [
			':id' => $this->id, 
			':price' => $this->price, 
			':name' => $this->name,
			':description' => $this->description
			]);
	}

	public function createProduct()
	{
		$sql = "INSERT INTO {$this->tableName} (name, price, description) VALUES (:name, :price, :description)";
		return $this->db->execute($sql, [
			':id' => $this->id, 
			':price' => $this->price, 
			':name' => $this->name,
			':description' => $this->description
			]);
	}


	public function getByCategoryId(int $categoryId)
	{
	}

	public function getTableName(): string
	{
		return "products";
	}
}
