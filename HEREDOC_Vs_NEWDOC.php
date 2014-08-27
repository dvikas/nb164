<?php
$name = 'Sanjay';

# HEREDOC_Vs_NEWDOC

# HEREDOC
$str = <<<PUNEET
Hello user,
	How are you?
	This is "Double Quote"
	This is 'Single Quote'
	This is 'Back Slash \'
	My Name is $name
PUNEET;

echo nl2br($str);
echo "<hr>";
# NEWDOC
$str = <<<'PUNEET'
	Didn't Parse variable $name
	  <div class="header">

    <ul class="top_menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </div>
  <div class="content">
    <div class="left">
      <ul class="left_menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </div>
PUNEET;
echo nl2br($str);
