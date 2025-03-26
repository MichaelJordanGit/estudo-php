<?php

require 'model/Livro.php';
require 'model/Usuario.php';

session_start();
require 'function.php';
require 'Flash.php';
$conexao = require 'conexao.php';
require 'Database.php';
require_once 'Validacao.php';
require 'routes.php';
