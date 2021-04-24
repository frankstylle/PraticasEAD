<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = 'Eduardo';
$idade = 8;

if($idade >= 6 && $idade <= 12){
    echo ' infantil';
}else if($idade >= 13 && $idade <= 18){
echo 'adolecente';
}else{
    echo 'adulto';
}