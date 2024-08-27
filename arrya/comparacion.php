<?php

    $courses = ['javascript','php'];
    $wishes = ['php','laravel','javascript','vuejs'];

    echo "<pre>";
    // var_dump(array_diff($wishes, $courses));

    $arrayA=[1,2,3,4,5];
    $arrayb=[3,4,5,6,7];

    var_dump(array_diff($arrayA, $arrayb));
    var_dump(array_diff($arrayb, $arrayA));

    // array_diff_assoc: valores, keys