
<?php
  
  // Store the file name into variable
  $file = 'afshan.pdf';
  $afshan = 'afshan.pdf';
    
  // Header content type
  header('Content-type: application/pdf');
    
  header('Content-Disposition: inline; afshan="' . $afshan . '"');
    
  header('Content-Transfer-Encoding: binary');
    
  header('Accept-Ranges: bytes');
    
  // Read the file
  @readfile($file);
    
  ?>
  