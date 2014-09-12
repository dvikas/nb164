<?php

$zip = new ZipArchive;
$res = $zip->open('wordpress-3.8.1.zip');
if ($res === TRUE) {
  $zip->extractTo('./');
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}
