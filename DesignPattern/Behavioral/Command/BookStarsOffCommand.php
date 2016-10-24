<?php

//copyright Lawrence Truett and FluffyCat.com 2005, all rights reserved

  include_once('BookCommand.php');

  class BookStarsOffCommand extends BookCommand {

    function execute() {$this->bookCommandee->setStarsOff();}

  }

?>
