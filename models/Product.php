<?php

namespace app\models;


class Product extends Record
{
	public $id;
	public $name;
	public $description;
	public $price;
	public $categoryId;

	public static function getProducts(array $ids = [])
	{
		$tableName = static::getTableName();
		$where = '';
		if (!empty($ids)) {
			$in = implode(', ', $ids);
			$where = "WHERE id IN ($in)";
			$sql = "SELECT * FROM {$tableName} {$where}";
			return static::getQuery($sql, []);
		} 
	}

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

	public static function getTableName(): string
	{
		return "products";
	}
}
