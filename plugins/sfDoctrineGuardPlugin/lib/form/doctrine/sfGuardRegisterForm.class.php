<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
  	parent::setup();
  	//Initialisation d'un tableau des années disponible dans la liste déroulante
  	$years = array();
    for($i=1950;$i<=date('Y');$i++){
    	$years[$i] = $i;	
    }
    
  	unset(
      $this['is_active'],
      $this['is_super_admin'],
      $this['updated_at'],
      $this['groups_list'],
      $this['permissions_list'],
      $this['_csrf_token']
    );

    $this->validatorSchema['password']->setOption('required', true);
    //on change le label du password
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword(array('label'=>'Mot de passe'));
    //on change le label du password_again
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword(array('label'=>'Confirmation'));
    $this->widgetSchema['first_name']->setLabel('Pr&eacute;nom');
    $this->widgetSchema['last_name']->setLabel('Nom');
    
    //On rajoute au validateur existant un validateur sur le format email
    $this->validatorSchema['email_address'] = new sfValidatorAnd(array(
    	$this->validatorSchema['email_address'],
    	new sfValidatorEmail(),
  	));  	
    //on redéfinit le label du champ Email
    $this->widgetSchema['email_address']->setLabel('Email');
    //Et celui du login
    $this->widgetSchema['username']->setLabel('Login');
    
    //on redefinit le champ birthday (date francaise + tableau d'années disponible)
    $this->widgetSchema['birthday'] = new sfWidgetFormDate(
    	array(
    	'format' => '%day% %month% %year%',
    	'years' => $years,
    	//Valeurs vides
    	'empty_values' => array('day'=>'Jour','month'=>'Mois','year'=>'Ann&eacute;e')
    	)
    );
    
    //On redéfinit le label du champ Date de naissance
    $this->widgetSchema['birthday']->setLabel('Date de naissance');
    
    //On redéfinit le label du champ téléphone
    $this->widgetSchema['phone_number']->setLabel('T&eacute;l&eacute;phone');
    
    //On redéfinit le label du champ adresse
    $this->widgetSchema['address']->setLabel('Adresse');
    
    
  }
}