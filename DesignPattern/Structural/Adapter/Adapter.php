<?php

// https://en.wikipedia.org/wiki/Adapter_pattern

// Adapter Pattern example

interface IFormatIPhone
{
    public function recharge();
    public function useLightning();
}

interface IFormatAndroid
{
    public function recharge();
    public function useMicroUsb();
}

// Adaptee
class IPhone implements IFormatIPhone
{
    private $connectorOk = FALSE;
    
    public function useLightning()
    {
        $this->connectorOk = TRUE;
        echo "Lightning connected -$<br>";
    }
    
    public function recharge()
    {
        if($this->connectorOk)
        {
            echo "Recharge Started<br>";
            echo "Recharge 20%<br>";
            echo "Recharge 50%<br>";
            echo "Recharge 70%<br>";
            echo "Recharge Finished<br>";
        }
        else
        {
            echo "Connect Lightning first<br>";
        }
    }
}

// Adapter
class IPhoneAdapter implements IFormatAndroid
{
    private $mobile;

    public function __construct(IFormatIPhone $mobile)
    {
        $this->mobile = $mobile;
    }

    public function recharge()
    {
        $this->mobile->recharge();
    }

    public function useMicroUsb()
    {
        echo "MicroUsb connected -> ";
        $this->mobile->useLightning();
    }
}

class Android implements IFormatAndroid
{
    private $connectorOk = FALSE;
    
    public function useMicroUsb()
    {
        $this->connectorOk = TRUE;
        echo "MicroUsb connected -><br>";
    }
    
    public function recharge()
    {
        if($this->connectorOk)
        {
            echo "Recharge Started<br>";
            echo "Recharge 20%<br>";
            echo "Recharge 50%<br>";
            echo "Recharge 70%<br>";
            echo "Recharge Finished<br>";
        }
        else
        {
            echo "Connect MicroUsb first<br>";
        }
    }
}

// client
class MicroUsbRecharger
{
    private $phone;
    private $phoneAdapter;

    public function __construct()
    {
        echo "---Recharging iPhone with Generic Recharger---<br>";
        $this->phone = new IPhone();
        $this->phoneAdapter = new IPhoneAdapter($this->phone);
        $this->phoneAdapter->useMicroUsb();
        $this->phoneAdapter->recharge();
        echo "---iPhone Ready for use---<br><br>";
    }
}

$microUsbRecharger = new MicroUsbRecharger();

class IPhoneRecharger
{
    private $phone;

    public function __construct()
    {
        echo "---Recharging iPhone with iPhone Recharger---<br>";
        $this->phone = new IPhone();
        $this->phone->useLightning();
        $this->phone->recharge();
        echo "---iPhone Ready for use---<br><br>";
    }
}

$iPhoneRecharger = new IPhoneRecharger();

class AndroidRecharger
{
    public function __construct()
    {
        echo "---Recharging Android Phone with Generic Recharger---<br>";
        $this->phone = new Android();
        $this->phone->useMicroUsb();
        $this->phone->recharge();
        echo "---Phone Ready for use---<br><br>";
    }
}

$androidRecharger = new AndroidRecharger();

// Result: #quanton81

//---Recharging iPhone with Generic Recharger---
//MicroUsb connected -> Lightning connected -$
//Recharge Started
//Recharge 20%
//Recharge 50%
//Recharge 70%
//Recharge Finished
//---iPhone Ready for use---
//
//---Recharging iPhone with iPhone Recharger---
//Lightning connected -$
//Recharge Started
//Recharge 20%
//Recharge 50%
//Recharge 70%
//Recharge Finished
//---iPhone Ready for use---
//
//---Recharging Android Phone with Generic Recharger---
//MicroUsb connected ->
//Recharge Started
//Recharge 20%
//Recharge 50%
//Recharge 70%
//Recharge Finished
//---Phone Ready for use---

?>
