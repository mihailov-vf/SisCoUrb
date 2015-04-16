<?php

namespace Siscourb\Ticket\ValueObject;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-15 at 20:36:29.
 */
class PointTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var array
     */
    protected $expectedArgs = [];

    /**
     * @var Point
     */
    protected $point;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->expectedArgs = [20, -30];

        $this->point = new Point($this->expectedArgs[0], $this->expectedArgs[1]);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Siscourb\Ticket\ValueObject\Point::__construct
     */
    public function testCreationParameters()
    {
        $this->assertAttributeEquals($this->expectedArgs[0], 'latitude', $this->point);
        $this->assertAttributeEquals($this->expectedArgs[1], 'longitude', $this->point);

        $this->assertAttributeInternalType('float', 'latitude', $this->point);
        $this->assertAttributeInternalType('float', 'longitude', $this->point);
    }

    /**
     * @covers Siscourb\Ticket\ValueObject\Point::getLatitude
     */
    public function testGetLatitude()
    {
        $latitude = $this->point->getLatitude();
        $this->assertEquals($this->expectedArgs[0], $latitude);
        $this->assertInternalType('float', $latitude);
    }

    /**
     * @covers Siscourb\Ticket\ValueObject\Point::getLongitude
     */
    public function testGetLongitude()
    {
        $longitude = $this->point->getLongitude();
        $this->assertEquals($this->expectedArgs[1], $longitude);
        $this->assertInternalType('float', $longitude);
    }
}
