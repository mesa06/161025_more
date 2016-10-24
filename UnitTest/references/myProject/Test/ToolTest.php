<?php

namespace myProject\Test;

use myProject\Tool;

class ToolTest extends \PHPUnit_Framework_TestCase {
    
    public function providerTestRepeatString() {
        return array(
            array(5, '*', "*****"),
            array(-1, '*', "iCount > 0 please."),
            array(21, '*', "iCount <= 20 please.")
        );
    }
 
    /**
    * @param int $paramCount
    * @param string $paramWhat
    * @param string $expectedResult
    *
    * @dataProvider providerTestRepeatString
    */
    public function testRepeatString($paramCount, $paramWhat, $expectedResult) {
        $tool = new Tool();
        $result = $tool->repeatString($paramCount, $paramWhat);
        $this->assertEquals($expectedResult, $result);
    }
    
} 


?>