<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action
{

	public function index()
	{

		$this->render('index');
	}

	public function inscreverse()
	{
		$this->render('inscreverse');
	}

	public function registrar()
	{

		echo '<pre>';
		print_r($_POST);
		echo '</pre>';

		//receber dados do form

		//sucesso

		//erro
	}
}
