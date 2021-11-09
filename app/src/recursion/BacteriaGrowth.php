<?php


namespace snippets\recursion;

/**
 * Bakterienwachstum
 *
 * Lösung auf Grundlage von Rekursion
 *
 * Im Beispiel werden 300 Bakterien definiert,
 * die ein Wachstum pro Intervall von 120 % besitzen
 *
 *
 * Class BacteriaGrowth
 * @package snippets\recursion
 */
class BacteriaGrowth
{



  /**
   * @var int
   */
  private int   $intervall;

  /**
   * @var float
   */
  private float $growth;



  /**
   * BacteriaGrowth constructor.
   */
  public function __construct()
  {

    // Eingaben
    $this->intervall = 5;
    $this->growth    = 1.2;
    $start_value     = 300;

    // Verarbeitung
    $bacteria_count = $this->growth($start_value);


    // Ausgabe
    print_r($bacteria_count);
    print_r(PHP_EOL);

  }



  /**
   * Wachstumsfunkton (Rekursiv)
   *
   * @param float $bacteria_count
   * @return float
   */
  private function growth(float $bacteria_count): float
  {

    // Intervalle verkleinern
    $this->intervall--;

    // Ende der Intervallmenge feststellen
    if ($this->intervall === 0) {
      return $bacteria_count;
    }

    // Intervalle durchlaufen
    return $this->growth($bacteria_count * $this->growth);

  }



}