<?php foreach($rlm_goodDeals as $goodDeal):?>
<div class="col-2-content">
<div class="floatl"><a href="#"><img src="<?php echo $goodDeal->getRlmPartner()->getLogoL() ?>" alt="" /></a></div>
<div class="col-2-text floatr">
<span><?php echo $goodDeal->getTitle() ?></span>
<p><?php echo $goodDeal->getContent() ?></p>
<?php echo link_to('J\'en profite','/goodDeal/'.$goodDeal->getId()) ?>
</div>
<div class="clear"></div>
</div>
<?php endforeach;?>
