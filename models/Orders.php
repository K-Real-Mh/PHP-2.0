<?php

namespace app\models;

use app\services\Db;

class Orders extends Model
{
	public $id;
	public $status = 'в обработке';

	public function addOrder()
	{
		$sql = "INSERT INTO {$this->tableName} (status) VALUES (:status)";
		return $this->db->execute($sql, [':status' => $this->status]);
	}

	function delOrder()
	{
		$this->status = 'Отменен';
		$sql = "UPDATE {$this->tableName} SET status = :status WHERE id = :id";
		return $this->db->execute($sql, [':status' => $this->status, ':id' => $this->id]);
	}


	public function getTableName(): string
	{
		return "orders";
	}
}
