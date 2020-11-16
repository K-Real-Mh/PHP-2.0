<?php

namespace app\models;

use app\services\Db;

class OrdersProduct extends Model
{
	public $id;
	public $id_product;
	public $qty;
	public $id_order;

	public function addOrderProduct()
	{
		$sql = "INSERT INTO {$this->tableName} (id_product, qty, id_order) VALUES (:id_product, :qty, :id_order)";
		return $this->db->execute($sql, [
			':id_product' => $this->id_product, 
			':qty' => $this->qty, 
			':id_order' => $this->id_order
			]);
	}
	public function getTableName(): string
	{
		return "products";
	}

}