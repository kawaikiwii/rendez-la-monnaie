<?php

/**
 * goodDeal actions.
 *
 * @package    rlm
 * @subpackage goodDeal
 * @author     stef
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class goodDealComponents extends sfComponents
{
    public function executeList(sfWebRequest $request)
    {
        $this->rlm_goodDeals = Doctrine_Core::getTable('RlmGoodDeal')->getGoodDealHomepage();
    }
}
