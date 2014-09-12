<?php
  ini_set("max_execution_time", 300);
  $zip = new ZipArchive();
  if ($zip->open(date('y-m-d-h-i-s').".zip", ZIPARCHIVE::CREATE) !== TRUE) {
    die ("Could not open archive");
  }
  $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("./"));

  foreach ($iterator as $key=>$value) {

    if(!is_dir(realpath($key))) {
      $zip->addFile(realpath($key),$key) or die ("ERROR: Could not add file: $key");
    }
  }
  $zip->close();

  echo "Archive created successfully.";
