<?php

namespace Drupal\dino_roar\Service;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class DinoListener implements EventSubscriberInterface {

  public function onKernelRequest(GetResponseEvent $event) {

     $request= $event->getRequest();
     $shouldRoar = $request->query->get ('roar');

     if ($shouldRoar){
          var_dump('ROOOOOOAR');

     }

    // event handling logic  here.
  }

  public static function getSubscribedEvents() {


    // Defines which event your subscriber listens to.
    // In this example, we're listening to KernelEvents::REQUEST and mapping it to the onKernelRequest method.
    return [
      KernelEvents::REQUEST => 'onKernelRequest',
    ];
  }
}
