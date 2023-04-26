<?php
   

   $file=fopen("text.txt","w") or die ("something went wrong");
   
   $string="first input into file \n";

   fwrite($file,$string);
   $string1="second input into file \n";

   
   fwrite($file,$string1);
   fclose($file);




?>