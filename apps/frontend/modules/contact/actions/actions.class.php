<?php

/**
 * contact actions.
 *
 * @package    rlm
 * @subpackage contact
 * @author     stef
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rlm_contacts = Doctrine_Core::getTable('RlmContact')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rlm_contact = Doctrine_Core::getTable('RlmContact')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rlm_contact);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RlmContactForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RlmContactForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rlm_contact = Doctrine_Core::getTable('RlmContact')->find(array($request->getParameter('id'))), sprintf('Object rlm_contact does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmContactForm($rlm_contact);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rlm_contact = Doctrine_Core::getTable('RlmContact')->find(array($request->getParameter('id'))), sprintf('Object rlm_contact does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmContactForm($rlm_contact);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rlm_contact = Doctrine_Core::getTable('RlmContact')->find(array($request->getParameter('id'))), sprintf('Object rlm_contact does not exist (%s).', $request->getParameter('id')));
    $rlm_contact->delete();

    $this->redirect('contact/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rlm_contact = $form->save();
      $this->getUser()->setFlash('notice', 'Your message has been registered!');
      $this->redirect('/');
      
    }
  }
}
