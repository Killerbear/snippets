<?php

namespace snippets;



use snippets\aoc\Y2021\Day_1\SonarSweep;
use snippets\aoc\Y2021\Day_1\SonarSweepGroup;

require_once __DIR__ . '/../vendor/autoload.php';


class Main
{
  public function __construct()
  {
//    new GradesGermany();
//    new TimeTrack();

    new SonarSweep();
    new SonarSweepGroup();

  }
}


new Main();



