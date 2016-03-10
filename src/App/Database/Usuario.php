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
		$sql = 'SELECT * FROM usuarios;';
		$stmt = $this->conexao->query($sql);
		$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		if (empty($resultado)) {
			echo 'Nenhum usuário encontrado!';
			die;
		}

		foreach ($resultado as $usuario) {
			var_dump($usuario);
		}
	}
}