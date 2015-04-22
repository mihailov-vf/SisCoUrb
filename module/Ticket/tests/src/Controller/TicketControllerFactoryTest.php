<?php

namespace Siscourb\Ticket\Controller;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-22 at 16:46:58.
 */
class TicketControllerFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreateService()
    {
        $ticketForm = \Mockery::mock('Siscourb\Ticket\Form\TicketForm');

        $ticketMapper = \Mockery::mock('Siscourb\Ticket\Repository\TicketRepository');

        $formManager = \Mockery::mock('Zend\Form\FormElementManager');
        $formManager->shouldReceive('get')
                ->with('Siscourb\Ticket\Form\TicketForm')->once()->andReturn($ticketForm);

        $serviceLocator = \Mockery::mock('Zend\ServiceManager\ServiceManager');
        $serviceLocator->shouldReceive('get')
                ->with('Siscourb\Ticket\Mapper\TicketMapper')->once()->andReturn($ticketMapper);

        $controllerManager = \Mockery::mock('Zend\Mvc\Controller\ControllerManager');
        $controllerManager->shouldReceive('getServiceLocator')->once()->andReturn($serviceLocator);

        $serviceLocator->shouldReceive('get')->with('FormElementManager')->once()->andReturn($formManager);

        $taskControllerFactory = new TicketControllerFactory();

        $this->assertInstanceOf(
                '\Siscourb\Ticket\Controller\TicketController', $taskControllerFactory->createService($controllerManager)
        );
    }
}
