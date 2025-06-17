<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require 'autoload.php';

try {
  $serie = new Serie('Nome da serie', 2024, Genero::Acao, 7, 20, 30);
  $episodio = new Episodio($serie, 'Piloto', 1);
  $episodio->avalia(0);


  $conversor = new ConversorNotaEstrela();
  echo $conversor->converte($episodio);
} catch (Exception $e) {
  echo 'Um problema aconteceu: ' . $e->getMessage();
}
