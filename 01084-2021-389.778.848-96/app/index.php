<?php

require __DIR__ . '/config.php';
require_once __DIR__ . '/View/head.php';
require_once __DIR__ . '/View/header.php';
require_once __DIR__ . '/View/home.php';
require_once __DIR__ . '/View/footer.php';

if ($value == 'cadastrarPessoa'){ require_once __DIR__ . '/Controller/pessoa.php';}
if ($value == 'cadastrarConta'){ require_once __DIR__ . '/Controller/conta.php';}
if ($value == 'cadastrarMovimento'){ require_once __DIR__ . '/Controller/movimento.php';}
if ($value == 'editarPessoaBD'){ require_once __DIR__ . '/Controller/editarPessoa.php';}
if ($value == 'editarContaBD'){ require_once __DIR__ . '/Controller/editarConta.php';}
if ($value == 'removerConta'){ require_once __DIR__ . '/Controller/removerConta.php';}

?>