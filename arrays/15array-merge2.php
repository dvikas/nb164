<?php
echo '<pre>';
// define arrays
$dark = array(
            'a'=>'black',
             1 => 'brown1',
             2 => 'brown134s',
            'b'=> 'brown2',
            'c'=>'blue');
$light = array(
            'a'=>'white',
             1 =>'silver1',
             'b'=>'silver2',
             'h'=>'yellow');
$colors = array_merge( $dark,$light);
print_r($colors);
/*
 *
 *            'a'=>'black',
             0 =>'silver1',
            'b'=> 'brown2',
             'h'=>'yellow');
              1 => 'brown1',
              2 => 'brown134s',
            'c'=>'blue');
            *
 * */
