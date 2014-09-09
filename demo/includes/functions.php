<?php

function pr($arr)
{
	echo '<pre style="background-color:#000;color:#fff;font-size:20px;border-radius:20px;padding:20px;">';
	print_r($arr);
	echo '</pre>';
}

function pr1($arr)
{
	echo '<pre style="background-color:yellow;color:green;font-size:20px;border-radius:20px;padding:20px;">';
	print_r($arr);
	echo '</pre>';
}
function pq($arr)
{
	echo '<div style="background-color:yellow;color:green;font-size:20px;border-radius:20px;padding:20px;">';
	print_r($arr);
	echo '</div>';
}
