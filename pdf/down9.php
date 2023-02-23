<?php
  
  //Store the file name into variable
  $file = 'pdf9.pdf';
  $pdf9 = 'pdf9.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; pdf9="' . $pdf9 . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>