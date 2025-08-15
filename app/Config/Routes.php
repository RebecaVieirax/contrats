<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

$routes->get('login', 'Login::index');
$routes->get('login/cadastrar', 'Login::cadastrar');
$routes->post('login/salvar', 'Login::salvar');
$routes->post('login/autenticar', 'Login::autenticar');
$routes->get('painel', 'Painel::index');
$routes->get('logout', 'Login::logout');
$routes->get('login/esqueci', 'Login::esqueci');
$routes->post('login/recuperar', 'Login::recuperar');
$routes->get('login/redefinir/(:any)', 'Login::redefinir/$1');
$routes->post('login/atualizarSenha', 'Login::atualizarSenha');
$routes->get('login/esqueci', 'Login::esqueci');
$routes->post('login/verificarEmail', 'Login::verificarEmail');
$routes->post('login/salvarNovaSenha', 'Login::salvarNovaSenha');
$routes->post('contrato/cadastrar', 'ContratoController::cadastrar');
$routes->get('logout', 'Login::logout'); // ou 'Painel::logout' se estiver lá
$routes->get('contratos', 'Contratos::index');
$routes->get('contratos/novo', 'Contratos::novo');
$routes->post('contratos/salvar', 'Contratos::salvar');
$routes->get('dominios/novo', 'Dominios::novo');
$routes->post('dominios/salvar', 'Dominios::salvar');
$routes->get('dominios', 'Dominios::index');
$routes->get('dominios/novo', 'Dominios::novo');
$routes->post('dominios/salvar', 'Dominios::salvar');
$routes->get('instrumentos/novo', 'Instrumentos::novo');
$routes->post('instrumentos/salvar', 'Instrumentos::salvar');
$routes->get('instrumentos', 'Instrumentos::index');
$routes->get('pagamentos/novo', 'Pagamentos::novo');
$routes->post('pagamentos/salvar', 'Pagamentos::salvar');
