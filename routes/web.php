<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tela', function () {
    return view('projetaço');
});

Route::get('/nome/{nome}',
 function (string $nome) {
    return 'ola' .$nome;
});

Route::get('/nome/{nome}/[profissao]',
 function (string $nome,
  string  $profissao) {
    return "ola  .$nome,
    voce e o melhor $profissao do mundo!";
});