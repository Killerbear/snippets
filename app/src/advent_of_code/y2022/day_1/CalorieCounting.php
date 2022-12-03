<?php

namespace snippets\advent_of_code\y2022\day_1;

use SplFileObject;

/**
 * https://adventofcode.com/2022/day/1
 *
 */
class CalorieCounting
{
    public function __destruct()
    {
        // Eingabe
        $inputFile = new SplFileObject(__DIR__ . '/input.txt');

        // Verarbeitung
        $calorieSum = [];
        $calories  = 0;
        
        while (($meal = $inputFile->fgets())) {
            $calories += (int)$meal;
            if ((int)$data === 0) {
                $calorieSum[] = $calories;
                $calories    = 0;
            }
        }
        
        $calorieSum[] = $calories;
        rsort($calorieSum,SORT_NUMERIC);

        // Ausgabe Teil 1
        print_r($calorieSum[0]);
        print_r(PHP_EOL);

        // Ausgabe Teil 2
        print_r($calorieSum[0]+$calorieSum[1]+$calorieSum[2]);
        print_r(PHP_EOL);
    }
}
