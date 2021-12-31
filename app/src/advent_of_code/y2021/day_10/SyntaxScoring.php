<?php


namespace snippets\advent_of_code\y2021\day_10;


class SyntaxScoring
{


  public function __construct()
  {

    $file = __DIR__ . '/input.txt';
//    $file          = __DIR__ . '/example_input.txt';
    $file_operator = new \SplFileObject($file);

    $sum = 0;
    while ($data = trim($file_operator->fgets())) {

      $illegal_char = $this->chk($data);

      // Punktebewertung
      switch ($illegal_char) {
        case ')' :
          $sum += 3;
          break;
        case ']' :
          $sum += 57;
          break;
        case '}' :
          $sum += 1197;
          break;
        case '>' :
          $sum += 25137;
          break;
      }

    }

    print_r($sum);
    print_r(PHP_EOL);

  }


  /**
   * Ersten fehlenden Zeichen
   *
   * @param string $data
   * @return string
   */
  private function chk(string $data): string
  {
    $len_2 = 1;
    while ($len_2 != 0) {
      $len_1 = strlen($data);
      $data  = str_replace(['()', '[]', '{}', '<>'], '', $data);
      $len_2 = $len_1 - strlen($data);
    }

    $len_2 = 1;
    while ($len_2 != 0) {
      $len_1 = strlen($data);
      $data  = str_replace(['(', '[', '{', '<'], '', $data);
      $len_2 = $len_1 - strlen($data);
    }

    if (strlen($data) > 0) {
      return $data[0];
    }

  }

}