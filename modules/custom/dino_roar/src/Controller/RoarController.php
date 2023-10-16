<?php

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\dino_roar\Service\RoarGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class RoarController extends ControllerBase {
  protected $roarGenerator;
  protected $loggerFactory;

  public function __construct(RoarGenerator $roarGenerator, LoggerChannelFactoryInterface $loggerFactory) {
    $this->roarGenerator = $roarGenerator;
    $this->loggerFactory = $loggerFactory;
  }

  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('dino_roar.roar_generator'),
      $container->get('logger.factory')
    );
  }

  public function roar($count = 5) {
    $roar = $this->roarGenerator->getRoar($count);
    $this->loggerFactory->get('default')
         ->debug($roar);

    return new Response($roar);
  }
}
