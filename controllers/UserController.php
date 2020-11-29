<?php


namespace app\controllers;

use app\models\User;

class UserController extends Controller
{
	public function actionIndex()
	{
		User::authorizationCheck('/?c=user&a=personal');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$login = $_POST['login'];
			var_dump($login);
			$password = md5($_POST['password'] . 'd5f8');
			var_dump($password);
			User::userCheck($login, $password);
		}
		echo $this->render('login', []);
	}

	public function actionPersonal()
	{
		session_start();
		if (!isset($_SESSION['user_id'])) {
			header("Location: /?c=user&a=index");
		}
		$user = User::getById($_SESSION['user_id']);
		echo $this->render('personal', ['user' => $user]);
	}

	public function actionExit()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			session_start();
			$exit = $_POST['exit'];
			if ($exit != null) {
				unset($_SESSION['user_id']);
				header("Location: /?c=user&a=index");
			}
			header("Location: /?c=user&a=index");
		}


		header("Location: /?c=user&a=index");
	}
}
