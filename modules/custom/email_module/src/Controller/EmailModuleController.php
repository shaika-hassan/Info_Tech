<?php

namespace Drupal\email_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class EmailModuleController extends ControllerBase {
  /**
   * Controller for sending welcome emails.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function welcome() {
    //  logic to trigger the sending of welcome emails manually goes here.
    // we can use the email_module_send_welcome_email function or your custom logic.

    // For example, we can render a simple response or a form for triggering emails.
    return new Response('Welcome email page');
  }
}
