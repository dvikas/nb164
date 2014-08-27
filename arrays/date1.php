<?php
//echo date_default_timezone_get();

date_default_timezone_set('Asia/Kolkata');

echo date('Y-m-d H:i:s', strtotime('+1 Hour')+(5*60));
