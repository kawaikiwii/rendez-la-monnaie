<?php

/**
 * news components.
 *
 * @package    rlm
 * @subpackage news
 * @author     stef
 * 
 */
class newsComponents extends sfComponents
{
    /**
     *
     * @param sfWebRequest $request
     */
    public function executeListHome(sfWebRequest $request)
    {
        $this->rlm_newss = Doctrine_Core::getTable('RlmNews')->getNewsList(sfConfig::get('app_max_news_on_homepage'));
    }

    public function executeListContact(sfWebRequest $request)
    {
        $this->rlm_newss = Doctrine_Core::getTable('RlmNews')->getNewsList(sfConfig::get('app_max_news_on_contact'));
    }

}
