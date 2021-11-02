<?php


namespace snippets\code_challenges\php;

/**
 * Class sockMerchant
 *
 * Der Sockenhändler :)
 * möchte aus eine Kiste von Socken immer 2 als Paar verkaufen.
 * Leider sind seine Socken nicht sortiert. Um das Beispiel einfach zu halten nehmen wir
 * für jede Sockenfarbe eine Zahl n an, die in einem Array unserer Funktion übergeben wird.
 * Als Ergebnis wollen bekommen immer die Anzahl 2 gleicher Paare.
 * Es können sowohl mehrere Paare als auch unterschiedliche Paare vorkommen.
 *
 * @package code_challenges\php
 */
class sockMerchant
{

  public function __construct()
  {
    // input
    $socks = [10, 20, 20, 10, 10, 30, 50, 10, 20];

    // calculation
    $count = $this->sockMerchant($socks);

    // output
    print_r($count);
    print_r(PHP_EOL);
  }


  /**
   * number of pairs
   *
   * @param array $ar
   * @return int
   */
  private function sockMerchant(array $ar): int
  {
    $pair_count = 0;
    $pairs      = [];

    foreach ($ar as $sock) {

      $pairs[$sock] = $pairs[$sock] ?? 0;
      $pairs[$sock]++;

      if (($i = array_search(2, $pairs, TRUE)) !== FALSE) {
        $pair_count++;
        $pairs[$i] = 0;
      }

    }

    return $pair_count;
  }

}