<?php
// strip HTML tags from string
// output: 'Please log in again'
echo $html = '<div width="200" style="color:red;border:1px solid blue;">Please <strong>log in again</strong></div>';
echo strip_tags($html);
