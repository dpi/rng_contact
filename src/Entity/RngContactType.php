<?php

namespace Drupal\rng_contact\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the contact type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "rng_contact_type",
 *   label = @Translation("Contact type"),
 *   admin_permission = "administer rng_contact types",
 *   config_prefix = "rng_contact_type",
 *   bundle_of = "rng_contact",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   handlers = {
 *     "list_builder" = "Drupal\rng_contact\Lists\RngContactTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *     "form" = {
 *       "default" = "Drupal\rng_contact\Form\RngContactTypeForm",
 *       "add" = "Drupal\rng_contact\Form\RngContactTypeForm",
 *       "edit" = "Drupal\rng_contact\Form\RngContactTypeForm",
 *       "delete" = "Drupal\rng_contact\Form\RngContactTypeDeleteForm"
 *     },
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/rng_contact/contact_types/add",
 *     "canonical" = "/admin/structure/rng_contact/contact_types/manage/{rng_contact_type}",
 *     "delete-form" = "/admin/structure/rng_contact/contact_types/manage/{rng_contact_type}/delete",
 *     "edit-form" = "/admin/structure/rng_contact/contact_types/manage/{rng_contact_type}",
 *     "admin-form" = "/admin/structure/rng_contact/contact_types/manage/{rng_contact_type}",
 *     "collection" = "/admin/structure/rng_contact/contact_types"
 *   }
 * )
 */
class RngContactType extends ConfigEntityBundleBase implements RngContactTypeInterface {

  /**
   * The machine name of this contact type.
   *
   * @var string
   */
  public $id;

  /**
   * The human readable name of this contact type.
   *
   * @var string
   */
  public $label;

  /**
   * A brief description of this contact type.
   *
   * @var string
   */
  public $description;

}
