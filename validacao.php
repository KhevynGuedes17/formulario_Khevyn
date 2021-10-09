<?php

/*
verificar se os campos existem
verificar se todos os campos estão preenchidos
validar de acordo com o tipo
*/

if(!isset($_POST['name']) && !isset($_POST['text_senha'])){
    echo('Cadastro feito com sucesso!');
}
if(!empty($_POST['name'])){
    die('Erro - O usario tem que ser preenchido');
}

if(!empty($_POST['text_senha'])){
    die('Erro - A senha tem que ser preenchida');
}






?>