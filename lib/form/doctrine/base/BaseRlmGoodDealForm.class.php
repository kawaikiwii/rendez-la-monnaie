<?php

/**
 * RlmGoodDeal form base class.
 *
 * @method RlmGoodDeal getObject() Returns the current form's model object
 *
 * @package    rlm
 * @subpackage form
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRlmGoodDealForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'partner_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RlmPartner'), 'add_empty' => false)),
      'type'       => new sfWidgetFormChoice(array('choices' => array('Promotion' => 'Promotion', 'Cadeau' => 'Cadeau', 'Reduction' => 'Reduction'))),
      'title'      => new sfWidgetFormInputText(),
      'content'    => new sfWidgetFormTextarea(),
      'homepage'   => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'partner_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RlmPartner'))),
      'type'       => new sfValidatorChoice(array('choices' => array(0 => 'Promotion', 1 => 'Cadeau', 2 => 'Reduction'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'content'    => new sfValidatorString(array('max_length' => 4000)),
      'homepage'   => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('rlm_good_deal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RlmGoodDeal';
  }

}
