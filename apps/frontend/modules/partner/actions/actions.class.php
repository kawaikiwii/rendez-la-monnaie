<?php

/**
 * partner actions.
 *
 * @package    rlm
 * @subpackage partner
 * @author     stef
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class partnerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rlm_partners = Doctrine_Core::getTable('RlmPartner')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rlm_partner = Doctrine_Core::getTable('RlmPartner')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rlm_partner);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RlmPartnerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RlmPartnerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rlm_partner = Doctrine_Core::getTable('RlmPartner')->find(array($request->getParameter('id'))), sprintf('Object rlm_partner does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmPartnerForm($rlm_partner);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rlm_partner = Doctrine_Core::getTable('RlmPartner')->find(array($request->getParameter('id'))), sprintf('Object rlm_partner does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmPartnerForm($rlm_partner);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rlm_partner = Doctrine_Core::getTable('RlmPartner')->find(array($request->getParameter('id'))), sprintf('Object rlm_partner does not exist (%s).', $request->getParameter('id')));
    $rlm_partner->delete();

    $this->redirect('partner/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rlm_partner = $form->save();

      $this->redirect('partner/edit?id='.$rlm_partner->getId());
    }
  }
  
  public function executeSearch(sfWebRequest $request)
  {
      $this->rlm_partners = Doctrine_Core::getTable('RlmPartner')->getWithGoodDeals();


      /*$this->rlm_good_deals = Doctrine_Core::getTable('RlmGoodDeal')
      ->createQuery('a')
      ->leftJoin('a.RlmPartner p')
      ->where('p.name LIKE "%'.$request->getParameter('recherche').'%"')
      ->execute();*/

  }
}
