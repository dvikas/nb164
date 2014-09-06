<?php
#test.php?uname=vikas&age=3456&pass=12345

echo "<pre>";
print_r($_GET);
echo "<hr>";
echo $_GET['uname'];
echo "<hr>";
echo $_GET['age'];
echo "<hr>";
echo $_GET['pass'];
echo "<hr>";
echo "<hr>";
print_r($_REQUEST);
echo "<hr>";
echo $_REQUEST['uname'];
echo "<hr>";
echo $_REQUEST['age'];
echo "<hr>";
echo $_REQUEST['pass'];
