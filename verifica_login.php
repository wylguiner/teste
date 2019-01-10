<?php
session_start();                        // Esse código
if(!$_SESSION['nome']) {                // não permite
    header('location: entrar.html');    // que entre na página
    exit();                             // sem estar logado
}