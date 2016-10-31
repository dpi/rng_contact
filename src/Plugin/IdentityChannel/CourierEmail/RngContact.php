<?php

namespace Drupal\rng_contact\Plugin\IdentityChannel\CourierEmail;

use Drupal\courier\Plugin\IdentityChannel\IdentityChannelPluginInterface;
use Drupal\courier\ChannelInterface;
use Drupal\Core\Entity\EntityInterface;

/**
 * Supports rng_contact entities.
 *
 * @IdentityChannel(
 *   id = "identity:rng_contact:courier_email",
 *   label = @Translation("rng_contact to courier_mail"),
 *   channel = "courier_email",
 *   identity = "rng_contact",
 *   weight = 10
 * )
 */
class RngContact implements IdentityChannelPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function applyIdentity(ChannelInterface &$message, EntityInterface $identity) {
    /** @var \Drupal\rng_contact\Entity\RngContactInterface $identity */
    /** @var \Drupal\courier\EmailInterface $message */
    $message->setRecipientName($identity->label());
//    $message->setEmailAddress($identity->mail->value);
  }

}
