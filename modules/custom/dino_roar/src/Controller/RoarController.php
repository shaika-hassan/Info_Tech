<?php

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Service\RoarGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class RoarController extends ControllerBase {
  protected $roarGenerator;

  public function __construct(RoarGenerator $roarGenerator) {
    $this->roarGenerator = $roarGenerator;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dino_roar.roar_generator')
    );
  }

  public function roar($count = 5) {
    $roar = $this->roarGenerator->getRoar($count);
    return new Response($roar);
  }
}
