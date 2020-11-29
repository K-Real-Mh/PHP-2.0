<?php

namespace app\models;

class User extends Record
{
	public $id;
	public $login;
	public $title;
	public $password;

	public function getByLogin($login)
	{
	}
	public static function authorizationCheck(string $path)
	{
		session_start();
		if (isset($_SESSION['user_id'])) {
			header("Location: {$path}");
		}
	}

	public static function userCheck(string $login, string $password)
	{
		$tableName = static::getTableName();
		$sql = "SELECT * FROM {$tableName} 
		WHERE login = '{$login}' 
		AND password = '{$password}'";
		if ($user = static::getQuery($sql, [])) {
			$_SESSION['user_id'] = $user[0]->id;
			header("Location: /?c=user&a=personal");
		} else {
			echo "Не авторизованы!";
		}
	}

	// public static function addUser()
	// {
	// 	$sql = "INSERT INTO {$this->tableName}(login, password) VALUES (:login, :password)";
	// 	return $this->db->execute($sql, [
	// 		':login' => $this->name,
	// 		':password' => $this->password
	// 	]);
	// }

	public static function getTableName(): string
	{
		return "users";
	}
}
