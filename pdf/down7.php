<?php
  
  //Store the file name into variable
  $file = 'pdf7.pdf';
  $pdf7 = 'pdf7.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; pdf7="' . $pdf7 . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>