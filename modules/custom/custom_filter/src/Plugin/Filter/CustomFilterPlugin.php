<?php

namespace Drupal\custom_filter\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a text format filter that auto-capitalizes pre-configured words.
 *
 * @Filter(
 *   id = "custom_filter",
 *   title = @Translation("Custom Filter Plugin"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 *   weight = 0
 * )
 */
class CustomFilterPlugin extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    // Get the configured list of words to auto-capitalize.
    $config = $this->getConfiguration();
    $wordsToCapitalize = is_array($config['words_to_capitalize']) ? $config['words_to_capitalize'] : [];

    // Regular expression to find and capitalize the words.
    $pattern = '/\b(' . implode('|', array_map('preg_quote', $wordsToCapitalize)) . ')\b/i';

    // Replace matched words with capitalized versions.
    $text = preg_replace_callback($pattern, function($matches) {
      return ucfirst($matches[0]);
    }, $text);

    // Create a FilterProcessResult with the modified text.
    $result = new FilterProcessResult($text);

    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();
    $wordsToCapitalize = isset($config['words_to_capitalize']) ? $config['words_to_capitalize'] : [];

    $form['words_to_capitalize'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Words to Auto-Capitalize'),
      '#default_value' => implode("\n", $wordsToCapitalize),
      '#description' => $this->t('Enter one word per line that you want to auto-capitalize (e.g., word1, word2, word3).'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $config = $this->getConfiguration();
    $wordsToCapitalize = isset($config['words_to_capitalize']) ? $config['words_to_capitalize'] : [];

    return $this->t('Words to Auto-Capitalize: @words', ['@words' => implode(', ', $wordsToCapitalize)]);
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    // Save the configuration when the form is submitted.
    $wordsToCapitalize = array_filter(explode("\n", $form_state->getValue('words_to_capitalize')));
    $this->setConfiguration(['words_to_capitalize' => $wordsToCapitalize]);
  }
}
