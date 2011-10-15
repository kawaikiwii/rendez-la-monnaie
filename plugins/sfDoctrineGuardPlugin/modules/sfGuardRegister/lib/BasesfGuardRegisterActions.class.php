<?php

class BasesfGuardRegisterActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //if ($this->getUser()->isAuthenticated())
    //{
      //$this->getUser()->setFlash('notice', 'You are already registered and signed in!');
      //$this->redirect('@homepage');
      //  $this->form = 
    //}else{
        $this->form = new sfGuardRegisterForm();
    //}

    

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $user = $this->form->save();
        $this->getUser()->signIn($user);

        $this->redirect('@homepage');
      }
    }
  }
  
    public function executeShow(sfWebRequest $request)
    {
        if ($this->getUser()->isAuthenticated())
        {
            $this->form = new sfGuardRegisterForm($this->getUser()->getGuardUser());
            
            if ($request->isMethod('post'))
            {
                          
                $array_test = $request->getParameter($this->form->getName());
                $array_test["password_again"] = $array_test["password"];
                
                $this->form->bind($array_test/*$request->getParameter($this->form->getName())*/);
                if ($this->form->isValid())
                {
                    $user = $this->form->save();
                    $this->getUser()->setFlash('notice', 'Votre compte a bien été modifié !');
                    
                }
            }
        }else{
            $this->redirect('@homepage');
        }
    }
}