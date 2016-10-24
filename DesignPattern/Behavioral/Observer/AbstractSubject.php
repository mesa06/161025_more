<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

  include_once('AbstractObserver.php');

  abstract class AbstractSubject {

    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);

    abstract function notify();

  }

?>
