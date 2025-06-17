<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
  Filme, Episodio, Serie, Genero
};
use ScreenMatch\Calculos\{
  CalculadoraDeMaratona, ConversorNotaEstrela
};

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme('Thor - Ragnarok',2021, Genero::SuperHeroi,130);

$filme->avalia(10);
$filme->avalia(7);
$filme->avalia(8);
$filme->avalia(4);
$filme->avalia(6);

var_dump($filme);

echo $filme->media();

$serie = new Serie('Lost', 2004, Genero::Acao, 10,20,60);
$episodio = new Episodio($serie, 'Episódio piloto', 1);

echo $serie->anoLancamento.'\n';

$serie->avalia(7);

echo $serie->media().'\n';


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";