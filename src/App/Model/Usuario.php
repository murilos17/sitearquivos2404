<?php

namespace App\Model;

use App\Database\Conexao;
/**
* 
*/
class Usuario 
{
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
			return [
            	'sucesso' => false, 
				'mensagem' => 'Nenhum usuário encontrado!'
			];
		}

		return [
			'sucesso' => true,
			'dados' => $resultado
		];
	}
}