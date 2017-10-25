<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Rota para Artefato
$route['artefato/(:num)'] = 'artefato/index/$1';      // Acesso às informações do artefato $1

// Rotas para Home
$route['(:any)'] = 'home/index/$1';             // Sem categoria escolhida
$route['(:any)/(:num)'] = 'home/index/$1/$2';   // Com categoria escolhida
