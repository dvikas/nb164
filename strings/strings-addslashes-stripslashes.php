<?php
/**
* Requirement :
* If any string contain
*  1. Single Quotes (')
*  2. Double Quotes (")
*  3. Backslash (\)
*   Then those special characters should not be read by compiler or cn say  must be Stripped by
* complier.
**/

$str = "This is ravi's string. He \":*: \" didn't kn\ow PHP";
echo addslashes($str);
echo "<br>";
echo stripslashes($str);
