<?php

namespace App\Core;

// 
abstract class Controller
{
	protected function model($model)
	{
		$className = 'App\\Model\\' . ucfirst($model);

		return new $className;
	}

	protected function view($view, array $data = [])
	{
		require_once __DIR__ . '/../view/' . $view . '.php';
	}
}