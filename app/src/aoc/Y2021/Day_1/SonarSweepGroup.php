<?php


namespace snippets\aoc\Y2021\Day_1;


use SplFileObject;

class SonarSweepGroup
{

  public function __destruct()
  {

    // Eingabe
    $fo = new SplFileObject(__DIR__ . '/input.txt');

    // Anfangsbedingungen
    $i = $old_sum = $row_a = $row_b = $row_c = $counter = 0;

    // Verarbeitung
    while (($data = (int)$fo->fgets())) {

      switch ($i % 3) {
        case 0:
          $row_a = $data;
          break;
        case 1:
          $row_b = $data;
          break;
        case 2:
          $row_c = $data;
      }

      if ($i++ > 1) {

        $sum = $row_a + $row_b + $row_c;

        if ($old_sum === 0) {
          $old_sum = $sum;
        }

        if ($old_sum < $sum) {
          $counter++;
        }

        $old_sum = $sum;

      }


    }

    // Ausgabe
    print_r($counter);
    print_r(PHP_EOL);

  }

}

