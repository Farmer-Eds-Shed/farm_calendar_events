<?php

namespace Drupal\farm_Calendar_Events\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a farm calender settings form.
 */
class FarmCalendarEventsSettingsForm extends ConfigFormbase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'farm_calendar_events.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'farm_calendar_events_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateinterface $form_state) {
    $config = $this->config(static::SETTINGS);

	
	$form['calendar_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Calendar ID'),
      '#description' => $this->t('Enter Calendar ID.'),
	  '#default_value' => $config->get('calendar_id'),
    ];
	
	    // Add the grafana_url option.
    $form['calendar_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Calendar URL'),
      '#description' => $this->t('Used to show a Google Calendar, when clicking the sidebar.'),
      '#default_value' => $config->get('calendar_url'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable(static::SETTINGS)
	  ->set('calendar_id', $form_state->getValue('calendar_id'))
      ->set('calendar_url', $form_state->getValue('calendar_url'))
	  ->save();

    parent::submitForm($form, $form_state);
  }

}