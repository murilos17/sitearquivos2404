<?php

namespace App\Controller;

use App\Core\Controller;

class Usuario extends Controller
{
	public function indexAction()
	{
		$model = $this->model('usuario');
		$usuarios = $model->listaUsuarios();

		if (! $usuarios['sucesso']) {
			die($usuarios['mensagem']);
		}

		$this->view ('usuario/index', ['usuarios' => $usuarios['dados']]); 
	}
}