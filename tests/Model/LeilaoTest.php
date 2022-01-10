<?php

namespace Alura\Leilao\Tests\Model;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    public function testLeilaoDeveReceberLance()
    {
        $joao = new Usuario('Joao');
        $maria = new Usuario('Maria');

        $leilao = new Leilao('Fiat 147 0KM');
        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($maria, 2000));

        static::assertCount(2, $leilao->getLances());
        static::assertEquals(1000, $leilao->getLances()[0]->getValor());
        static::assertEquals(1000, $leilao->getLances()[0]->getValor());
    }
}