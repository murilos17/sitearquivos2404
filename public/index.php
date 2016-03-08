<?php
/**
 * Front controler
 */

use App\Database\Usuario;

require_once __DIR__ . '/../vendor/autoload.php';

$a = new Usuario();
$a->listaUsuarios();