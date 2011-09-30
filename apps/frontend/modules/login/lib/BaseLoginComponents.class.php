<?php

class BaseLoginComponents extends sfComponents
{
  public function executeLogin_form()
  {
    $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin');
    
    $this->form = new $class();
  }
}