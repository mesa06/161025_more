<?php

// https://en.wikipedia.org/wiki/Abstract_factory_pattern

interface ButtonInterface
{
    public function Paint();
}

interface GUIFactoryInterface
{
    public function CreateButton();
}

class WinFactory implements GUIFactoryInterface
{
    public function CreateButton()
    {
        return new WinButton();
    }
}

class OSXFactory implements GUIFactoryInterface
{
    public function CreateButton()
    {
        return new OSXButton();
    }
}

class WinButton implements ButtonInterface
{
    public function Paint()
    {
        echo "Windows Button";
    }
}

class OSXButton implements ButtonInterface
{
    public function Paint()
    {
        echo "OSX Button";
    }
}

$appearance = "osx";

$factory = NULL;

switch ($appearance) {
    case "win":
        $factory = new WinFactory();
        break;
    case "osx":
        $factory = new OSXFactory();
        break;
    default:
        break;
}

$button = $factory->CreateButton();
$button->Paint();

?>
