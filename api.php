<?php

function buscarCEP($cep) {
    if(strlen($cep) == 8) {
        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/69918108/json/"),true);
            return $dados;
        
    }
}