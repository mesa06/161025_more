<?php

//copyright Lawrence Truett and FluffyCat.com 2005, all rights reserved

  class CaseReverseFacade {

    public static function reverseStringCase($stringIn) {

      $arrayFromString = 
	    ArrayStringFunctions::stringToArray($stringIn);

      $reversedCaseArray = 
	    ArrayCaseReverse::reverseCase($arrayFromString);

      $reversedCaseString = 
	    ArrayStringFunctions::arrayToString($reversedCaseArray);

	  return $reversedCaseString;

    }

  }
?>
