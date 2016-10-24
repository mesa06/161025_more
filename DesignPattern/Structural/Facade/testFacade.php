<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

  include_once('ArrayCaseReverse.php');  
  include_once('ArrayStringFunctions.php');
  include_once('Book.php');  
  include_once('CaseReverseFacade.php');

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");

  echo "BEGIN TESTING FACADE PATTERN";
  echo tagins("br").tagins("br");
  
  $book = 
    new Book("Design Patterns",
	            "Gamma, Helm, Johnson, and Vlissides");

  echo "Original book title: ".$book->getTitle();
  echo tagins("br").tagins("br");

  $bookTitleReversed = 
    CaseReverseFacade::reverseStringCase($book->getTitle());  
  
  echo "Reversed book title: ".$bookTitleReversed;
  echo tagins("br").tagins("br");

  echo "END TESTING FACADE PATTERN";
  echo tagins("br");

  echo tagins("/body");
  echo tagins("/html");

  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>
