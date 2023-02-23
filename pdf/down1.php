<?php
  
// Store the file name into variable
$file = 'zaid.pdf';
$zaid = 'zaid.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; zaid="' . $zaid . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
  
?>






