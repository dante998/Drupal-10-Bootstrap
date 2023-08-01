<?php

namespace Drupal\custom_field_type\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Define the custom field type.
 *
 * @FieldType (
 *   id = "custom_field_type",
 *   label = @Translation("Custom Field Type"),
 *   description = @Translation("Description for the custom field type"),
 *   category = @Translation("Text"),
 * )
 */

class CustomFieldType extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition): array {
    return [
      'columns' => [
        'value' => [
          'type' => 'varchar',
          'length' => 255,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultStorageSettings(): array {
    return [
        'length' => 255,
      ] + parent::defaultStorageSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data): array {
    $element = [];

    $element['length'] = [
      '#type' => 'number',
      '#title' => t("Length of your text."),
      '#required' => TRUE,
      '#default_value' => $this->getSetting("length"),
    ];
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultFieldSettings(): array {
    return [
      'moreinfo' => "More info default value",
      ] + parent::defaultFieldSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function fieldSettingsForm(array $form, FormStateInterface $form_state): array {
    $element =[];
    $element ['moreinfo'] = [
      '#type' => 'textfield',
      '#title' => 'More information about this field.',
      '#required' => TRUE,
      '#default' => $this->getSetting("moreinfo"),
    ];
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function PropertyDefinitions(FieldStorageDefinitionInterface $field_definition): array {
    $properties['value'] = DataDefinition::create('string')->setLabel(t("Name"));
    return $properties;
  }
}
