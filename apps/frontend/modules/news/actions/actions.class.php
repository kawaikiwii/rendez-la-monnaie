<?php

/**
 * news actions.
 *
 * @package    rlm
 * @subpackage news
 * @author     stef
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rlm_newss = Doctrine_Core::getTable('RlmNews')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rlm_news = Doctrine_Core::getTable('RlmNews')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rlm_news);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RlmNewsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RlmNewsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rlm_news = Doctrine_Core::getTable('RlmNews')->find(array($request->getParameter('id'))), sprintf('Object rlm_news does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmNewsForm($rlm_news);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rlm_news = Doctrine_Core::getTable('RlmNews')->find(array($request->getParameter('id'))), sprintf('Object rlm_news does not exist (%s).', $request->getParameter('id')));
    $this->form = new RlmNewsForm($rlm_news);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rlm_news = Doctrine_Core::getTable('RlmNews')->find(array($request->getParameter('id'))), sprintf('Object rlm_news does not exist (%s).', $request->getParameter('id')));
    $rlm_news->delete();

    $this->redirect('news/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rlm_news = $form->save();

      $this->redirect('news/edit?id='.$rlm_news->getId());
    }
  }
}
