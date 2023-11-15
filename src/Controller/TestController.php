<?php

namespace Drupal\test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Returns array.
 */
class TestController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function link(){

    // Create a URL object from a URI
    $url = Url::fromUri('https://www.example.com');

    // Generate a link using the Url object
    $link_output = \Drupal::service('link_generator')->generate('Visit Example.com',$url);
    // Output the link
    return [
      '#markup' => $this->t('This is a link: @link', ['@link' => $link_output]),
    ];
  }
}

