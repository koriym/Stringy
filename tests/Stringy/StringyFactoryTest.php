<?php

$base = realpath(dirname(__FILE__) . '/../..');
require("$base/src/Stringy/StringyFactoryInterface.php");
require("$base/src/Stringy/StringyFactory.php");

use Stringy\Stringy as S;
use Stringy\StringyFactory;

class StringyFactoryTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StringyFactory
     */
    protected $factory;

    public function setUp()
    {
        $this->factory = new StringyFactory;
    }

    public function testNewInstance()
    {
        $stringy = $this->factory->newInstance('foo');
        $this->assertInstanceOf('Stringy\Stringy', $stringy);
    }
}
