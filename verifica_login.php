<?php
session_start();                        // Esse código
if(!$_SESSION['nome']) {                // não permite
    header('location: entrar.php');    // que entre na página
    exit();                             // sem estar logado
}