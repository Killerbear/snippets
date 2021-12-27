<?php


namespace snippets\advent_of_code\y2021\day_9;


use SplFileObject;
use SplQueue;


/**
 *  * https://adventofcode.com/2021/day/9
 *
 * Class SmokeBasin
 * @package snippets\advent_of_code\y2021\day_9
 */
class SmokeBasin
{


  public function __construct()
  {

    // Konfiguration
//    $file        = __DIR__ . '/example_input.txt';
    $file        = __DIR__ . '/input.txt';
    $file_object = new SplFileObject($file);
    $parse_data  = new SplQueue();
    $valleys     = [];


    $parse_data->push(trim($file_object->fgets()));
    $parse_data->push(trim($file_object->fgets()));

    // top Area
    $current = str_split($parse_data->offsetGet(0));
    $bottom  = str_split($parse_data->offsetGet(1));
    $valleys = array_merge($valleys, $this->ListOfValleys(NULL, $current, $bottom));

    while ($data = trim($file_object->fgets())) {
      $parse_data->push($data);

      // middle Area
      $top     = str_split($parse_data->offsetGet(0));
      $current = str_split($parse_data->offsetGet(1));
      $bottom  = str_split($parse_data->offsetGet(2));
      $valleys = array_merge($valleys, $this->ListOfValleys($top, $current, $bottom));

      $parse_data->shift();
    }

    // bottom Area
    $top     = str_split($parse_data->offsetGet(0));
    $current = str_split($parse_data->offsetGet(1));
    $valleys = array_merge($valleys, $this->ListOfValleys($top, $current, NULL));


    // Ausgabe
    print_r(count($valleys) + array_sum($valleys));
    print_r(PHP_EOL);

  }


  /**
   * @param array|null $top
   * @param array $current
   * @param array|null $bottom
   * @return array
   */
  private function ListOfValleys(?array $top, array $current, ?array $bottom): array
  {

    $index      = 0;
    $last_index = count($current) - 1;
    $min_list   = [];

    foreach ($current as $item) {

      $values = [];

      if ($top !== NULL) {
        $values[] = (int)$top[$index];
      }

      if ($bottom !== NULL) {
        $values[] = (int)$bottom[$index];
      }

      if ($index > 0) {
        $values[] = (int)$current[$index - 1];
      }

      if ($index < $last_index) {
        $values[] = (int)$current[$index + 1];
      }

      if ((int)$item < min($values)) {
        $min_list[] = (int)$item;
      }

      $index++;
    }

    return $min_list;

  }


}