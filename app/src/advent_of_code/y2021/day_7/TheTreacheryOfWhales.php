<?php


namespace snippets\advent_of_code\y2021\day_7;


class TheTreacheryOfWhales
{

  private array $pos_data;

  public function __construct()
  {

    // Konfiguration
    $this->pos_data = [];


    // input
    $file = __DIR__ . '/input.txt';
    $this->load_positions($file);


    // Median
    sort($this->pos_data);
    $count      = count($this->pos_data);
    $center_pos = intdiv($count, 2);
    $median     = $this->pos_data[$center_pos];


    $fuel = 0;
    foreach ($this->pos_data as $val) {
      $fuel += abs($median - $val);
    }

    print_r($fuel);
    print_r(PHP_EOL);
  }

  /**
   * @param string $file
   */
  private function load_positions(string $file)
  {
    $pos_data       = file_get_contents($file);
    $this->pos_data = explode(',', $pos_data);
  }


}