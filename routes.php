<?php

//----------- Home

Route::set('index.php', function() {
  NavigationController::CreateView('index');
});

//----------- Consitec Menu

Route::set('sobre', function() {
  NavigationController::CreateView('consitec/sobre');
});
Route::set('estrutura', function() {
  NavigationController::CreateView('consitec/estrutura');
});
Route::set('governanca', function() {
  NavigationController::CreateView('consitec/governanca');
});

//----------- Gestão Menu

Route::set('gestao-capacitacao', function() {
  NavigationController::CreateView('gestao/capacitacao');
});
Route::set('gestao-capital', function() {
  NavigationController::CreateView('gestao/capital');
});
Route::set('gestao-comunidades', function() {
  NavigationController::CreateView('gestao/comunidades');
});
Route::set('gestao-conhecimento', function() {
  NavigationController::CreateView('gestao/conhecimento');
});
Route::set('gestao-construcao', function() {
  NavigationController::CreateView('gestao/construcao');
});
Route::set('gestao-projetos', function() {
  NavigationController::CreateView('gestao/projetos');
});
Route::set('gestao-riscos', function() {
  NavigationController::CreateView('gestao/riscos');
});
Route::set('gestao-seguranca', function() {
  NavigationController::CreateView('gestao/seguranca');
});

//----------- Serviços Menu

Route::set('servicos-construcao-civil', function() {
  NavigationController::CreateView('servicos/construcao-civil');
});
Route::set('servicos-eng-civil', function() {
  NavigationController::CreateView('servicos/eng-civil');
});
Route::set('servicos-eng-eletrica', function() {
  NavigationController::CreateView('servicos/eng-eletrica');
});
Route::set('servicos-eng-estrutural', function() {
  NavigationController::CreateView('servicos/eng-estrutural');
});
Route::set('servicos-eng-mecanica', function() {
  NavigationController::CreateView('servicos/eng-mecanica');
});
Route::set('servicos-preconstrucao', function() {
  NavigationController::CreateView('servicos/preconstrucao');
});
Route::set('servicos-subterraneas', function() {
  NavigationController::CreateView('servicos/subterraneas');
});
Route::set('servicos-ti', function() {
  NavigationController::CreateView('servicos/ti');
});

//----------- Serviços Menu

Route::set('projetos', function() {
  NavigationController::CreateView('projetos/projetos');
});
Route::set('clientes', function() {
  NavigationController::CreateView('projetos/clientes');
});

//----------- Contato

Route::set('contato', function() {
  NavigationController::CreateView('contato');
});

?>