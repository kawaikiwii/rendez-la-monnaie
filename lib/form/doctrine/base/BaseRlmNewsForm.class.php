<?php

/**
 * RlmNews form base class.
 *
 * @method RlmNews getObject() Returns the current form's model object
 *
 * @package    rlm
 * @subpackage form
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRlmNewsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'type'       => new sfWidgetFormChoice(array('choices' => array('Site' => 'Site', 'Nouveau Partenaire' => 'Nouveau Partenaire', 'Nouveau Bon Plan' => 'Nouveau Bon Plan'))),
      'title'      => new sfWidgetFormInputText(),
      'content'    => new sfWidgetFormTextarea(),
      'link'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type'       => new sfValidatorChoice(array('choices' => array(0 => 'Site', 1 => 'Nouveau Partenaire', 2 => 'Nouveau Bon Plan'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'content'    => new sfValidatorString(array('max_length' => 4000)),
      'link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('rlm_news[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RlmNews';
  }

}
