<?php
	error_reporting(~E_DEPRECATED);
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('nb164') or die(mysql_error());
