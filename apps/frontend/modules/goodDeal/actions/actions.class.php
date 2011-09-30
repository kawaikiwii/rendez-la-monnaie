<?php

/**
 * goodDeal actions.
 *
 * @package    rlm
 * @subpackage goodDeal
 * @author     stef
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class goodDealActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rlm_good_deals = Doctrine_Core::getTable('RlmGoodDeal')
      ->createQuery('a')
      ->leftJoin('a.RlmPartner')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rlm_good_deal = Doctrine_Core::getTable('RlmGoodDeal')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rlm_good_deal);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RlmGoodDealForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RlmGoodDealForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rlm_good_deal = Doctrine_Core::getTable('RlmGoodDeal')->find(array($request->getParameter('id'))), sprintf('Object rlm_good_deal does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmGoodDealForm($rlm_good_deal);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rlm_good_deal = Doctrine_Core::getTable('RlmGoodDeal')->find(array($request->getParameter('id'))), sprintf('Object rlm_good_deal does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmGoodDealForm($rlm_good_deal);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rlm_good_deal = Doctrine_Core::getTable('RlmGoodDeal')->find(array($request->getParameter('id'))), sprintf('Object rlm_good_deal does not exist (%s).', $request->getParameter('id')));
    $rlm_good_deal->delete();

    $this->redirect('goodDeal/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rlm_good_deal = $form->save();

      $this->redirect('goodDeal/edit?id='.$rlm_good_deal->getId());
    }
  }

  public function executeSearch(sfWebRequest $request)
  {
      
      $this->rlm_good_deals = Doctrine_Core::getTable('RlmGoodDeal')->searchGoodDeals($request);
      $this->parametre = $request->getPostParameters();
      
  }
}
