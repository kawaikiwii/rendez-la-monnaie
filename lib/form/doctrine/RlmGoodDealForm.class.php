<?php

/**
 * RlmGoodDeal form.
 *
 * @package    rlm
 * @subpackage form
 * @author     stef
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RlmGoodDealForm extends BaseRlmGoodDealForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
  }
}
