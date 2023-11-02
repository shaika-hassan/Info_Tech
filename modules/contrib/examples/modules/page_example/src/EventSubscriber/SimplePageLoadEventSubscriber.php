<?php

namespace Drupal\page_example\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent; // Adjust the event class
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\GenericEvent;
use Drupal\page_example\Event\SimplePageLoadEvent;

class SimplePageLoadEventSubscriber implements EventSubscriberInterface {

  public function onKernelRequest(RequestEvent $event) { // Adjust the event class
    // Check if the current route matches "examples/page_example/simple".
    if ($event->getRequest()->attributes->get('_route') == 'examples.page_example.simple') {
      // Dispatch the "simple_page_load" event.
      $simplePageLoadEvent = new SimplePageLoadEvent();
      \Drupal::service('event_dispatcher')->dispatch(SimplePageLoadEvent::EVENT_NAME, $simplePageLoadEvent);
    }
  }

  public static function getSubscribedEvents() {
    // Subscribe to the KernelEvents::REQUEST event.
    return [KernelEvents::REQUEST => 'onKernelRequest'];
  }
}
