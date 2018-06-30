<?php

    $large_number = 9223372036854775807;
    var_dump($large_number);

    $large_number = 9223372036854775808;
    var_dump($large_number);

    $million = 1000000;
    $large_number = 50000000000000 * $million;
    var_dump($large_number);

?>