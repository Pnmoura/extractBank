<?php

namespace extractBank\model;


/**
 * @param $dados
 * @return void
 * $data array return definition header
 */

function returnHeader($dados): void
{
    header('Content-Type: application/json');
    $json = json_encode($dados);
    echo $json;
}

