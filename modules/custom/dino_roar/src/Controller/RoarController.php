<?php

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\dino_roar\Service\RoarGenerator;

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

  public function content() {
    return [
      '#markup' => $this->roarGenerator->generateRoar(),
    ];
  }
}
