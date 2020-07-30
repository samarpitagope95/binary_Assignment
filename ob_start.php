<?php 
  
  
function callback($buffer){ 
    
    return (strtoupper($buffer)); 
} 
  
ob_start("callback"); 
echo "Hello World!"; 
ob_end_flush(); 
  
?> 