<?php
  
  //Store the file name into variable
  $file = 'pdf8.pdf';
  $pdf8 = 'pdf8.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; pdf8="' . $pdf8 . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>