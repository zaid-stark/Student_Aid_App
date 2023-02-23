<?php
  
  //Store the file name into variable
  $file = 'pdf5.pdf';
  $pdf5 = 'pdf5.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; pdf5="' . $pdf5 . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>