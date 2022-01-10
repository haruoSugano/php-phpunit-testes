<?php

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use Service\Avaliador;

require './vendor/autoload.php';

$leilao = new Leilao('Fiat 147 0 Km');

$maria = new Usuario('Maria');
$joao = new Usuario('João');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

$valorEsperado = 2500;

if($maiorValor == $valorEsperado){
    echo "Teste OK";
} else {
    echo "Teste falhou";
}
