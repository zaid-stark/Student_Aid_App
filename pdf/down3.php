
<?php
  
  //Store the file name into variable
  $file = 'faizi.pdf';
  $faizi = 'faizi.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; faizi="' . $faizi . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>