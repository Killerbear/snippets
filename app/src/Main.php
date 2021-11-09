<?php

namespace snippets;


use snippets\recursion\BacteriaGrowth;

require_once __DIR__ . '/../vendor/autoload.php';


class Main
{
  public function __construct()
  {
    new BacteriaGrowth();
  }
}


new Main();



