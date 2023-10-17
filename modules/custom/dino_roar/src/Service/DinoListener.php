<?php

namespace Drupal\dino_roar\Service;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class DinoListener implements EventSubscriberInterface {

  public function onKernelRequest(RequestEvent $event) {
     $request = $event->getRequest();
     $shouldRoar = $request->query->get('roar');

     if ($shouldRoar) {
          var_dump('ROOOOOOAR');
     }

    // Event handling logic here.
  }

  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => 'onKernelRequest',
    ];
  }
}
