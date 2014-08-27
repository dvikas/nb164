<?php
//switch ('home')
switch ($argv[1])
{
  case 'home':
  case 'contact':
                $a = 2; $b = 5;
                echo mul(2,5); break;
  case 'about':
  case 'help':
  case 'roadmap':
  case 'support': echo " Support Page"; break;
  case 'careers': echo " Careers Page"; break;
  default : echo "No Match ";
}
echo "\n\n\n\n\n\n";

function mul($a,$b)
{
  return $a*$b;
}
