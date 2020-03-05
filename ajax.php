<?php
   // Array with names
   $a[] = "Salonoy Josephine";
   $a[] = "Cabatuan Martin Alejandro";
   $a[] = "Manalop Mark Ronald";
   $a[] = "Sarsonas Carl Benedict";
   $a[] = "Villarin Alfie";
   $a[] = "Calledo Thommy";
   $a[] = "De Ramos Noel ";
   $a[] = "Rivera Lovely Joy";
   $a[] = "Ybañez Reymartin";
   $a[] = "Marcellana Aljun";

 
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
		
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>