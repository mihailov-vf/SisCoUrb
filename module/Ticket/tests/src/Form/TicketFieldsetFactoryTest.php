<?php

namespace Siscourb\Ticket\Form;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-21 at 17:16:35.
 */
class TicketFieldsetFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TicketFieldsetFactory
     */
    protected $ticketFieldsetFactory;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->ticketFieldsetFactory = new TicketFieldsetFactory;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Siscourb\Ticket\Form\TicketFieldsetFactory::createService
     */
    public function testCreateService()
    {
        $doctrineManager = \Mockery::mock('Doctrine\Common\Persistence\ObjectManager');
        $serviceLocator = \Mockery::mock('Zend\ServiceManager\ServiceManager');
        $serviceLocator->shouldReceive('get')
                ->with('Doctrine\ORM\EntityManager')
                ->once()
                ->andReturn($doctrineManager);

        $formManager = \Mockery::mock('Zend\Form\FormElementManager');
        $formManager->shouldReceive('getServiceLocator')
                ->once()
                ->andReturn($serviceLocator);

        $locationFieldset = \Mockery::mock('Siscourb\Ticket\Form\LocationFieldset');
        $formManager->shouldReceive('get')
                ->with('Siscourb\Ticket\Form\LocationFieldset')
                ->once()
                ->andReturn($locationFieldset);
        
        $this->assertInstanceOf(
            'Siscourb\Ticket\Form\TicketFieldset',
            $this->ticketFieldsetFactory->createService($formManager)
        );
    }
}
