<?php

/**
 * RlmContact form base class.
 *
 * @method RlmContact getObject() Returns the current form's model object
 *
 * @package    rlm
 * @subpackage form
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRlmContactForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'first_name'    => new sfWidgetFormInputText(),
      'last_name'     => new sfWidgetFormInputText(),
      'address'       => new sfWidgetFormTextarea(),
      'phone_number'  => new sfWidgetFormInputText(),
      'email_address' => new sfWidgetFormInputText(),
      'question'      => new sfWidgetFormTextarea(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'first_name'    => new sfValidatorString(array('max_length' => 255)),
      'last_name'     => new sfValidatorString(array('max_length' => 255)),
      'address'       => new sfValidatorString(array('max_length' => 2000)),
      'phone_number'  => new sfValidatorString(array('max_length' => 255)),
      'email_address' => new sfValidatorString(array('max_length' => 255)),
      'question'      => new sfValidatorString(array('max_length' => 10000)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'RlmContact', 'column' => array('email_address')))
    );

    $this->widgetSchema->setNameFormat('rlm_contact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RlmContact';
  }

}
