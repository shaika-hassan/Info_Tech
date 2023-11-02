<?php

namespace Drupal\custom_event_logger\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\GenericEvent;
use Drupal\Core\Database\Connection;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

/**
 * Event subscriber to log "Simple Page Loaded" message.
 */
class CustomEventLoggerSubscriber implements EventSubscriberInterface {

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $database;

  /**
   * The logger factory.
   *
   * @var \Drupal\Core\Logger\LoggerChannelFactoryInterface
   */
  protected $loggerFactory;

  /**
   * Constructs a new CustomEventLoggerSubscriber.
   *
   * @param \Drupal\Core\Database\Connection $database
   *   The database connection.
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $loggerFactory
   *   The logger factory.
   */
  public function __construct(Connection $database, LoggerChannelFactoryInterface $loggerFactory) {
    $this->database = $database;
    $this->loggerFactory = $loggerFactory;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['onSimplePageLoad'];
    return $events;
  }

  /**
   * Logs a "Simple Page Loaded" message when the "simple_page_load" event is triggered.
   *
   * @param \Symfony\Component\EventDispatcher\GenericEvent $event
   *   The event object.
   */
  public function onSimplePageLoad(GenericEvent $event) {
    // Log the message.
    $this->loggerFactory->get('custom_event_logger')->notice('Simple Page Loaded');

    // Insert a record into the database.
    $this->database->insert('custom_event_logger')
      ->fields([
        'message' => 'Simple Page Loaded',
        'timestamp' => \Drupal::time()->getRequestTime(),
      ])
      ->execute();
  }
}
