<?php

namespace Drupal\simple_message;

use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class DisplaySimpleMessage implements EventSubscriberInterface {

  use StringTranslationTrait;

  /**
   * The Messenger service.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  private $messenger;

  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  public function displayMessage(GetResponseEvent $event) {
    if (\Drupal::service('router.admin_context')->isAdminRoute()) {
      return;
    }

    $this->messenger->addMessage($this->t('This site is running on a <a href="@vagrant">Vagrant</a> server, deployed with <a href="@ansible">Ansible</a> and <a href="@ansistrano">Ansistrano</a>.', [
      '@ansible' => 'https://ansible.com',
      '@ansistrano' => 'https://ansistrano.com',
      '@vagrant' => 'https://vagrantup.com',
    ]));
  }

  /**
   * @inheritDoc
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['displayMessage'];

    return $events;
  }

}
