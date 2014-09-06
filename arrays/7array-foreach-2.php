<?php
// define array
$cities = array(
    3 => "London",
    6 => "Washington D.C.",
    8 => "Paris",
    12 => "Delhi"
);
// print_r($cities);

// iterate over array
// print each value
for ($i = 3; $i <= 12; $i +=3) {
    
    echo $cities[$i];
}
echo "<hr>";
foreach($cities as $abcd){
    echo "$abcd<hr>";
}