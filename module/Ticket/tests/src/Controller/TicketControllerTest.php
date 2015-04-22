<?php

namespace Siscourb\Ticket\Controller;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-20 at 16:32:46.
 */
class TicketControllerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TicketController
     */
    protected $ticketController;

    /**
     * @var \Siscourb\Ticket\Repository\TicketRepository
     */
    protected $ticketMapper;

    /**
     * @var \Siscourb\Ticket\Form\TicketForm 
     */
    protected $ticketForm;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->ticketMapper = \Mockery::mock('Siscourb\Ticket\Repository\TicketRepository');
        $this->ticketForm = \Mockery::mock('Siscourb\Ticket\Form\TicketForm');
        $this->ticketController = new TicketController($this->ticketMapper, $this->ticketForm);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::listTicketsAction
     * @todo   Implement testListTicketsAction().
     */
    public function testListAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::createAction
     * @todo   Implement testCreateAction().
     */
    public function testCreateAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::saveAction
     * @todo   Implement testSaveAction().
     */
    public function testSaveAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::viewAction
     * @todo   Implement testViewAction().
     */
    public function testViewAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::addNoteAction
     * @todo   Implement testAddNoteAction().
     */
    public function testAddNoteAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::editAction
     * @todo   Implement testEditAction().
     */
    public function testEditAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Siscourb\Ticket\Controller\TicketController::closeAction
     * @todo   Implement testCloseAction().
     */
    public function testCloseAction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }
}
