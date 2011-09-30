<?php

/**
 * RlmPartner form.
 *
 * @package    rlm
 * @subpackage form
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RlmPartnerForm extends BaseRlmPartnerForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      
      $this->widgetSchema['logo_l'] = new sfWidgetFormInputFile(array(
                                        'label' => 'Logo little',
                                         ));

      $this->validatorSchema['logo_l'] = new sfValidatorFile(array(
                                        'required' => true,
                                        'path' => sfConfig::get('sf_upload_dir').'/images',
                                        'mime_types' => 'web_images',
                               ));
      $this->widgetSchema['logo_b'] = new sfWidgetFormInputFile(array(
                                        'label' => 'Logo big',
                                         ));

      $this->validatorSchema['logo_b'] = new sfValidatorFile(array(
                                        'required' => true,
                                        'path' => sfConfig::get('sf_upload_dir').'/images',
                                        'mime_types' => 'web_images',
                               ));

  }
}
