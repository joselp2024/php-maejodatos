<?php

    $frontend = ['javascript'];
    $backend = ['php','laravel'];

    $courses = ['javascrip','laravel','php'];
    $categories = ["front","back","framework"];

    echo "<pre>";
    var_dump(array_merge($frontend, $backend));
  
    echo "<pre>";
    var_dump(array_combine($categories, $courses));