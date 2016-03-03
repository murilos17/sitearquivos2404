<?php

namespace App\Database;

/**
* 
*/
class Usuario 
{
	public $id;
	public $nome;
	public $senha;
	public $dtCriacao;

	private $conexao;

	public function __construct()
	{
		$this->conexao = new Conexao();	
	}


	public function listaUsuarios()
	{
		$sql = 'SELECT * FROM usuario;';
		$resultado = $this->conexao->query($sql);

		if ($resultado->num_rows > 0) {
			foreach ($resultado as $usuario) {
				var_dump($usuario);
			}
		}
		echo 'Nenhum usuário encontrado!';

	}
}