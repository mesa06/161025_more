<?php

//copyright Lawrence Truett and FluffyCat.com 2005, all rights reserved

  class ArrayStringFunctions {
  
    public static function arrayToString($arrayIn) {
      $string_out = NULL;
	  foreach ($arrayIn as $oneChar) {
	    $string_out .= $oneChar;
	  }
	  return $string_out;
    }
	
    public static function stringToArray($stringIn) {
      return str_split($stringIn);
    }

  }
?>
