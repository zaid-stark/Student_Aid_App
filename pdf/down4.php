
<?php
  
  //Store the file name into variable
  $file = 'pdf4.pdf';
  $pdf4 = 'pdf4.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; pdf4="' . $pdf4 . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>