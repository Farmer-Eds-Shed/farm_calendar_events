<?php

namespace Drupal\farm_calendar_events\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * A calendar controller.
 */
class FarmCalendarEventsController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function fullView() {
    $calendar_url = \Drupal::config('farm_calendar_events.settings')->get('calendar_url');

    $build = [
      '#theme' => 'farm_calendar_events_full_view',
      '#url' => $calendar_url
    ];
    return $build;
  }

}
