<?php

  $dark = array (
    0 => 'black',
    'one' => 'brown',
    2 => 'blue',
  );
  $light = array (
    0 => 'white',
    'one' => 'silver',
    2 => 'yellow',

  );

  $colors = array_merge($dark, $light);
  print_r($colors);

  $combinedColors = array_combine($dark, $light);
  print_r($combinedColors);
