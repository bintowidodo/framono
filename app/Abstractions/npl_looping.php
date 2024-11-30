<?php
	function npl_for($start, $end, $callback) {
        for ($i = $start; $i < $end; $i++) {
            $callback($i);
        }
    }

    // Contoh penggunaan:
    /*for(0, 5, function($i) {
        echo "Iterasi ke-$i\n";
    });
    */

    function npl_while($conditionCallback, $bodyCallback) {
        while ($conditionCallback()) {
            $bodyCallback();
        }
    }

    // Contoh penggunaan:
    /*$count = 0;
    while(
        function() use (&$count) {
            return $count < 5;
        },
        function() use (&$count) {
            echo "Count: $count\n";
            $count++;
        }
    );*/

    function foreach($array, $callback) {
        foreach ($array as $key => $value) {
            $callback($key, $value);
        }
    }

    // Contoh penggunaan:
    /*$data = ["a" => 1, "b" => 2, "c" => 3];
    foreach($data, function($key, $value) {
        echo "Key: $key, Value: $value\n";
    });*/

