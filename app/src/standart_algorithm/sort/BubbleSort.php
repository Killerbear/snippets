<?php

namespace snippets\standart_algorithm\sort;

class BubbleSort
{
    public function __construct()
    {
        $daten = "329848327648";

        echo $daten;
        echo PHP_EOL;

        for( $j = 0 ; $j < strlen( $daten ) - 2 ; $j++ ){
            for( $i = 0 ; $i < strlen( $daten ) - 1 - $j ; $i++  ){

                $stelle1 = $daten[ $i ];
                $stelle2 = $daten[ $i + 1 ];

                if( $stelle1 > $stelle2 ){

                    $merkeTausch = $stelle1;
                    $stelle1 = $stelle2;
                    $stelle2 = $merkeTausch;

                    $daten[ $i ] = $stelle1;
                    $daten[ $i + 1 ] = $stelle2;

                }

            }
        }

        echo $daten;
        echo PHP_EOL;
    }
}