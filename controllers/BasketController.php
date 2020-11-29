<?php


namespace app\controllers;


use app\models\Product;

class BasketController extends Controller
{

	public function actionIndex()
	{
		session_start();
		$basket = [];
		if (!empty($_SESSION['basket'])) {
			$productsIds = array_keys($_SESSION['basket']);
			$products = Product::getProducts($productsIds);
			foreach ($products as $product) {
				$basket[] = [
					'product' => $product,
					'qty' => $_SESSION['basket'][$product->id]
				];
			}
		}
		echo $this->render('basket', ['basket' => $basket]);
	}

	public function actionAdd()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$productId = $_POST['id'];
			$productQty = $_POST['qty'];
			session_start();
			if (isset($_SESSION['basket'][$productId])) {
				$_SESSION['basket'][$productId] += $productQty;
			} else {
				$_SESSION['basket'][$productId] = $productQty;
			}
		}
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}
}
