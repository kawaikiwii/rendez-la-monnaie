<?php

/**
 * RlmContact form.
 *
 * @package    rlm
 * @subpackage form
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RlmContactForm extends BaseRlmContactForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      //on change le label du prénom
      $this->widgetSchema['first_name']->setLabel('Pr&eacute;nom');
      $this->widgetSchema['last_name']->setLabel('Nom');
      $this->widgetSchema['address']->setLabel('Adresse');
      $this->widgetSchema['phone_number']->setLabel('T&eacute;l&eacute;phone');
      $this->widgetSchema['email_address']->setLabel('Email');
      $this->widgetSchema['question']->setLabel('Questions / Commentaires');


  }
}
