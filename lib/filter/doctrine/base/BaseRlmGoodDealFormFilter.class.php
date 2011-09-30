<?php

/**
 * RlmGoodDeal filter form base class.
 *
 * @package    rlm
 * @subpackage filter
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRlmGoodDealFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'partner_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RlmPartner'), 'add_empty' => true)),
      'type'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'Promotion' => 'Promotion', 'Cadeau' => 'Cadeau', 'Reduction' => 'Reduction'))),
      'title'      => new sfWidgetFormFilterInput(),
      'content'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'homepage'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'partner_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RlmPartner'), 'column' => 'id')),
      'type'       => new sfValidatorChoice(array('required' => false, 'choices' => array('Promotion' => 'Promotion', 'Cadeau' => 'Cadeau', 'Reduction' => 'Reduction'))),
      'title'      => new sfValidatorPass(array('required' => false)),
      'content'    => new sfValidatorPass(array('required' => false)),
      'homepage'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('rlm_good_deal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RlmGoodDeal';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'partner_id' => 'ForeignKey',
      'type'       => 'Enum',
      'title'      => 'Text',
      'content'    => 'Text',
      'homepage'   => 'Boolean',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
