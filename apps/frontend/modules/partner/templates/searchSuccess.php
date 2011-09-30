<div class="news">
    <div class="spaceZ"></div>
    <div class="col-inner floatl">
        <img src="/images/recent-icon.gif" alt="" class="floatl" />
        <h1>Résultat de votre recherche: </h1>
        <span>Lorem ipsum dolor sit ameconse</span>
        <br />
        <br />
        <div>
        </div>

        <?php foreach ($rlm_partners as $rlm_partner): ?>
        <div class="aboutcolumn1">
            <div>
                <h5><?php echo $rlm_partner->getName() ?></h5>
                <img src="<?php echo $rlm_partner->getLogoL() ?>" alt="" class="abouticon" />
                <?php echo $rlm_partner->getDescription() ?>
            </div>
        </div><!--
        <div class="aboutcolumn2">
            <div>
                <h5><?php //echo $rlm_good_deal->getTitle() ?></h5>
                <img src="/images/ico-med-7.png" alt="" class="abouticon" />
                <?php //echo $rlm_good_deal->getContent() ?>
                <div class="insidereadmore">Ajouté le: <a href="#">Le 31 Juillet 2010</a></div>
            </div>
        </div>-->
        <div class="clear"></div>
        <?php endforeach; ?>
    </div>
</div>

