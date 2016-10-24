<?php

//copyright Lawrence Truett and FluffyCat.com 2005, all rights reserved

  include_once('BookCommandee.php');

  abstract class BookCommand {

    protected $bookCommandee;

    function __construct($bookCommandee_in) {
      $this->bookCommandee = $bookCommandee_in;
    }

    abstract function execute();

  }

?>
