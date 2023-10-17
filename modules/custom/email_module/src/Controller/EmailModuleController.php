<?php

namespace Drupal\email_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\user\Entity\User;

class EmailModuleController extends ControllerBase {
  /**
   * Controller for sending welcome emails.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function sendWelcomeEmails() {
    // Simulate the user registration process by adding user data to the queue.
    $user = User::load(123); // Replace 123 with the actual user ID.
    if ($user) {
      \Drupal::queue('email_welcome')->createItem($user->id());
    }

    // For example, you can render a simple response or a form for triggering emails.
    return new Response('Welcome email page');
  }
}
