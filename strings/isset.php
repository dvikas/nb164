<?php

$arr = array(
            'india'=>'delhi',
            'srilanka'=>'colombo',
            'us'=>false,
            'uk'=>null,
            'china'=>null
        );

var_dump(isset($arr['china']));
var_dump(empty($arr['india']));
var_dump(empty($arr['china']));
var_dump(empty($arr['srilanka']));
