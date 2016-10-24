<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

  include_once('AbstractSubject.php');
  
  abstract class AbstractObserver {

    abstract function update(AbstractSubject $subject_in);

  }

?>
