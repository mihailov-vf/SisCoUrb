<?php

namespace Siscourb\Ticket\Form;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-21 at 13:06:41.
 */
class TicketFormTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TicketForm
     */
    protected $ticketForm;

    /**
     *
     * @var TicketFieldset
     */
    protected $ticketFieldset;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->ticketFieldset = \Mockery::mock('Siscourb\Ticket\Form\TicketFieldset')->makePartial();
        $this->ticketForm = new TicketForm($this->ticketFieldset);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function testFormConstruction()
    {
        $this->assertInstanceOf('Siscourb\Ticket\Form\TicketForm', $this->ticketForm);
        $this->assertEquals('TicketForm', $this->ticketForm->getName());

        $this->assertAttributeSame($this->ticketFieldset, 'ticketFieldset', $this->ticketForm);
    }

    /**
     * @covers Siscourb\Ticket\Form\TicketForm::init
     */
    public function testInit()
    {
        $this->ticketForm->init();
        
        $this->assertInstanceOf('Siscourb\Ticket\Form\TicketFieldset', $this->ticketForm->get('Ticket'));
        $this->assertInstanceOf('Zend\Form\Element\Submit', $this->ticketForm->get('submit'));

        $this->assertEquals('post', $this->ticketForm->getAttribute('method'));
        $this->assertEquals($this->ticketForm->getBaseFieldset(), $this->ticketFieldset);
    }
}
