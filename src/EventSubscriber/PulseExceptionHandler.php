<?php

namespace Pulse\HandlerException\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class PulseExceptionHandler implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
          KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event){
        dump($event);
    }

}
