<?php
echo "> Topo moment" . PHP_EOL;
$goed = array(
);
$plaatsen = array(
  "Mexico" => "Mexico City",
  "Argentina" => "Buenos Aires",
  "India" => "New Delhi",
  "Zuid-Korea" => "Seoul",
  "China" => "Peking",
  "USA" => "Washington D.C.",
  "Japan" => "Tokyo",
  "Nigeria" => "Abuja",
  "Egypt" => "Cairo",
  "UK" => "London"
);
foreach($plaatsen as $quiz => $answer) {
  echo "> Wat is de hoofstad van " . $quiz . "?" . PHP_EOL;
  $input = readline("> ");
  if ($input === $answer){
    echo "> Zeker" . PHP_EOL;
    $goed[] = $answer;
  }
  else 
  echo "> Niet goed " .PHP_EOL;
}
echo "> Je scoorde " . count($goed) . " correct van de 10" . PHP_EOL;
$fout = 10 - count($goed);
echo "> Je scoorde " . $fout . " verkeerd van de 10" . PHP_EOL;