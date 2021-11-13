<?php

namespace snippets;


use snippets\number_series\CombinationTable2D;

require_once __DIR__ . '/../vendor/autoload.php';


class Main
{
  public function __construct()
  {
    new CombinationTable2D();
  }
}


new Main();



