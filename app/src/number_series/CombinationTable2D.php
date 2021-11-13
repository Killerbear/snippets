<?php


namespace snippets\number_series;


use ArrayObject;

/**
 * Erzeugt ein 2D Zahlenfeld.
 * In diesem Feld wird die Kombination jeder Zahl abgebildet
 *
 * Beispiel:
 *
 *    1  2  3  4  5  6  7  8
 *    2  3  4  5  6  7  8  9
 *    3  4  5  6  7  8  9 10
 *    4  5  6  7  8  9 10 11
 *    5  6  7  8  9 10 11 12
 *    6  7  8  9 10 11 12 13
 *    7  8  9 10 11 12 13 14
 *    8  9 10 11 12 13 14 15
 *
 *
 *
 * Class CombinationTable2D
 * @package snippets\number_series
 */
class CombinationTable2D
{

  /**
   * CombinationTable2D constructor.
   */
  public function __construct()
  {

    // Eingabe
    $horizontal_max = 10;
    $vertical_max   = 5;


    // Metadaten anlegen
    $white_space_count = max($vertical_max, $horizontal_max);


    // Verarbeitung
    $combine_field = $this->combineGenerator($horizontal_max, $vertical_max);
    $display_data  = $this->display($combine_field, $white_space_count);


    // Ausgabe
    print_r($display_data);

  }


  /**
   * 2D-Feld-Daten für Anzeige aufbereiten
   *
   * @param ArrayObject $field_2d
   * @param int $white_space_count
   * @return string
   */
  private function display(ArrayObject $field_2d, int $white_space_count): string
  {

    $display_data = '';

    foreach ($field_2d as $vertical) {
      foreach ($vertical as $horizontal) {
        // Abstand zwischen den Zahlen berechnen
        $repeat_count = strlen($white_space_count) + 2 - strlen($horizontal);
        $spaces       = str_repeat(' ', $repeat_count);
        $display_data .= $spaces . $horizontal;
      }
      $display_data .= PHP_EOL;
    }

    return $display_data;

  }


//  private function


  /**
   * 2D-Feld-Daten erzeugen
   *
   * @param int $horizontal_max
   * @param int $vertical_max
   *
   * @return ArrayObject
   */
  private function combineGenerator(int $horizontal_max, int $vertical_max): ArrayObject
  {

    $combine_field = new ArrayObject();

    for ($vertical = 0; $vertical < $vertical_max; $vertical++) {
      for ($horizontal = 0; $horizontal < $horizontal_max; $horizontal++) {

        $field_number                          = $vertical + $horizontal + 1;
        $combine_field[$vertical][$horizontal] = $field_number;

      }
    }

    return $combine_field;

  }


}