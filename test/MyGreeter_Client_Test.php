<?php
require '/MyGreeter/lib/Client.php';

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $greetArr = ["Good morning", "Good afternoon", "Good evening"];
        $this->assertTrue(
            in_array($this->greeter->getGreeting(), $greetArr)
        );
    }

}
