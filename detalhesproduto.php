<?php
$id = filter_input(INPUT_GET,'id');

echo $id;
/*
$id - atributo que irá receber um valor vindo de outra interface
filter_input() - função nativa do php que serve para sanitizar os dados de entrada
INPUT_GET - método de entrada do valor precedido de um parâmetro 'id'
*/
?>