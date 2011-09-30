<?php

/**
 * RlmNews filter form base class.
 *
 * @package    rlm
 * @subpackage filter
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRlmNewsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'type'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'Site' => 'Site', 'Nouveau Partenaire' => 'Nouveau Partenaire', 'Nouveau Bon Plan' => 'Nouveau Bon Plan'))),
      'title'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link'       => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'type'       => new sfValidatorChoice(array('required' => false, 'choices' => array('Site' => 'Site', 'Nouveau Partenaire' => 'Nouveau Partenaire', 'Nouveau Bon Plan' => 'Nouveau Bon Plan'))),
      'title'      => new sfValidatorPass(array('required' => false)),
      'content'    => new sfValidatorPass(array('required' => false)),
      'link'       => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('rlm_news_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RlmNews';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'type'       => 'Enum',
      'title'      => 'Text',
      'content'    => 'Text',
      'link'       => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
