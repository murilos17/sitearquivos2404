<?php

namespace App\Database;

/**
* 
*/
class Conexao extends \PDO
{
	
	function __construct($caminhoArquivo = 'config.ini')
	{
		$arquivo['database'] = parse_ini_file($caminhoArquivo);

		$dns = $arquivo['database']['driver'] .
        ':host=' . $arquivo['database']['host'] .
        ';port=' . $arquivo['database']['port'] .
        ';dbname=' . $arquivo['database']['schema'];

        parent::__construct($dns, $arquivo['database']['username'], $arquivo['database']['password']);
	}
}
