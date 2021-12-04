<?php


namespace snippets\aoc\Y2021\day_3;


use SplFileObject;

class BinDiagnostic
{
  public function __construct()
  {

    // Eingabe
    $file           = __DIR__ . '/input.txt';
    $file_operation = new SplFileObject($file);

    // Konfiguration
    $one          = array_fill(0, 12, 0);
    $zero         = array_fill(0, 12, 0);
    $gamma_rate   = '';
    $epsilon_rate = '';

    // Verarbeitung
    while ($input_bin = trim($file_operation->fgets())) {
      foreach (str_split($input_bin, 1) as $i => $bit) {
        $one[$i]  += $bit ? 1 : 0;
        $zero[$i] += $bit ? 0 : 1;
      }
    }

    foreach ($one as $i => $bits) {
      $gamma_rate   .= $bits > $zero[$i] ? 1 : 0;
      $epsilon_rate .= $bits > $zero[$i] ? 0 : 1;
    }

    // Ausgabe
    print_r(bindec($gamma_rate) * bindec($epsilon_rate));
    print_r(PHP_EOL);

  }

}