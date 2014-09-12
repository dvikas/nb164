<?php

$file = 'myproject/uploads/avatar.jpg';

$details = pathinfo($file);

echo '<pre>';
print_r($details);
