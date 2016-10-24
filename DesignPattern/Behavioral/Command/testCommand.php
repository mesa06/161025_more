<?php

//copyright Lawrence Truett and www.FluffyCat.com 2005, all rights reserved

  include_once('BookCommandee.php');
  include_once('BookCommand.php');
  include_once('BookStarsOnCommand.php');
  include_once('BookStarsOffCommand.php');

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");

  echo "BEGIN TESTING COMMAND PATTERN";
  echo tagins("br").tagins("br");
  
  $book = 
    new BookCommandee("Design Patterns",
                      "Gamma, Helm, Johnson, and Vlissides");
  echo "book after creation: ";
  echo tagins("br");
  echo $book->getAuthorAndTitle();
  echo tagins("br").tagins("br");
  
  $starsOn = new BookStarsOnCommand($book);
  callCommand($starsOn);
  echo "book after stars on: ";
  echo tagins("br");
  echo $book->getAuthorAndTitle();
  echo tagins("br").tagins("br");
  
  $starsOff = new BookStarsOffCommand($book);
  callCommand($starsOff);
  echo "book after stars off: ";
  echo tagins("br");
  echo $book->getAuthorAndTitle();
  echo tagins("br");

  echo tagins("br");
  echo "END TESTING COMMAND PATTERN";
  echo tagins("br");

  echo tagins("/body");
  echo tagins("/html");
  
  //the callCommand function demonstrates that a specified
  //  function in BookCommandee can be executed with only 
  //  an instance of BookCommand.
  function callCommand(BookCommand $bookCommand_in) {
    $bookCommand_in->execute();
  }

  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>
