<?php
namespace controllers;

use controllers\BaseController;
use base\App;

class PostController extends BaseController
{
	public function actionList()
	{
		$data = $this->mysql->select("SELECT * FROM articles");
		echo $this->render('index', [
			'data'=>$data
			]);
	}

	public function actionShow($id)
	{
		$data = $this->mysql->select("SELECT * FROM `articles` WHERE `id`=$id");
		$data = $data[0];
		echo $this->render('show', [
			'data'=>$data
			]);
	}
}
