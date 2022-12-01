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
        $fo = new SplFileObject(__DIR__ . '/input.txt');


        // Verarbeitung
        $numbers = [];
        $number  = 0;
        while (($data = $fo->fgets())) {
            $number += (int)$data;
            if ((int)$data === 0) {
                $numbers[] = $number;
                $number    = 0;
            }
        }
        $numbers[] = $number;

        rsort($numbers,SORT_NUMERIC);

        // Ausgabe Teil 1
        print_r($numbers[0]);
        print_r(PHP_EOL);

        // Ausgabe Teil 2
        print_r($numbers[0]+$numbers[1]+$numbers[2]);
        print_r(PHP_EOL);


    }

}