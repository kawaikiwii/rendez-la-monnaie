<label for="recherche">RECHERCHER PAR MOT CLÉ:</label>

    <form action="<?php echo url_for('@rlm_search') ?>" method="post">
        <input type="text" name="recherche" tabindex="2" />

        <select name="type_p" id="state" tabindex="5">
            <option>Th&eacute;matiques</option>
            <option value="jeux" >Jeux</option>
            <option value="high-tech" >High-tech</option>
            <option value="e-commerce" >E-commerce</option>
        </select>
        <!--<select name="type_bp" id="state" tabindex="5">
            <option>Type d'offre</option>
            <option value="promotion">Promotion</option>
            <option value="reduction">R&eacute;duction</option>
            <option value="cadeau">Cadeau</option>
        </select>-->
        </div>
        <div class="ok">
            <input type="submit" class="button2" value="RECHERCHER" />
        </div>
    </form>
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

        <?php foreach ($rlm_good_deals as $rlm_good_deal): ?>
        <div class="aboutcolumn1">
            <div>
                <h5><?php echo $rlm_good_deal->getRlmPartner() ?></h5>
                <img src="<?php echo $rlm_good_deal->getRlmPartner()->getLogoL() ?>" alt="" class="abouticon" />
                <?php echo $rlm_good_deal->getRlmPartner()->getDescription() ?>
                <!--<div class="insidereadmore"></div>-->
            </div>
        </div>
        <div class="aboutcolumn2">
            <div>
                <h5><?php echo $rlm_good_deal->getTitle() ?></h5>
                <img src="/images/ico-med-7.png" alt="" class="abouticon" />
                <?php echo $rlm_good_deal->getContent() ?>
                <div class="insidereadmore">Ajouté le: <a href="#">Le 31 Juillet 2010</a></div>
            </div>
        </div>
        <div class="clear"></div>
        <?php endforeach; ?>
    </div>
</div>

