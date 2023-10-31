<?php

namespace Drupal\page_example\EventSubscriber;

use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class SimplePageLoadEventSubscriber implements EventSubscriberInterface {

  public function onKernelRequest(GetResponseEvent $event) {
    // Check if the current route matches "examples/page_example/simple".
    if ($event->getRequest()->attributes->get('_route') == 'examples.page_example.simple') {
      // Dispatch the "simple_page_load" event.
      $event = new SimplePageLoadEvent();
      \Drupal::service('event_dispatcher')->dispatch(SimplePageLoadEvent::EVENT_NAME, $event);
    }
  }

  public static function getSubscribedEvents() {
    // Subscribe to the KernelEvents::REQUEST event.
    return [KernelEvents::REQUEST => 'onKernelRequest'];
  }

}

