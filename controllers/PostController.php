<?php
namespace controllers;

use controllers\BaseController;

class PostController extends BaseController
{
	public function request()
	{
		$data = $this->mysql->select("SELECT * FROM articles");
		echo $this->render('index', [
			'data'=>$data
			]);
	}
}
