<?php
require 'config.php';
include 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

include __DIR__."/../views/template_noticias.php";