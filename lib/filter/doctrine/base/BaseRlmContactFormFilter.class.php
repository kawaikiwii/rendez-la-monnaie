<?php

/**
 * RlmContact filter form base class.
 *
 * @package    rlm
 * @subpackage filter
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRlmContactFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'first_name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone_number'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email_address' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'question'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'first_name'    => new sfValidatorPass(array('required' => false)),
      'last_name'     => new sfValidatorPass(array('required' => false)),
      'address'       => new sfValidatorPass(array('required' => false)),
      'phone_number'  => new sfValidatorPass(array('required' => false)),
      'email_address' => new sfValidatorPass(array('required' => false)),
      'question'      => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('rlm_contact_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RlmContact';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'first_name'    => 'Text',
      'last_name'     => 'Text',
      'address'       => 'Text',
      'phone_number'  => 'Text',
      'email_address' => 'Text',
      'question'      => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
