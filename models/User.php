<?php

namespace app\models;

class User extends Model
{
	public $name;
	public $email;
	public $password;

	public function getByLogin($login)
	{
	}

	public function addUser() {
		$sql = "INSERT INTO {$this->tableName}(login, password) VALUES (:login, :password)";
		return $this->db->execute($sql, [
			':login' => $this->name, 
			':password' => $this->password
			]);
	}

	public function getTableName(): string
	{
		return "users";
	}
}
