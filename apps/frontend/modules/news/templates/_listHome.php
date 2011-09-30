<?php foreach($rlm_newss as $count=>$news):?>
    <?php if($count%2): ?>
        <div class="aboutcolumn1">
    <?php else: ?>
        <div class="aboutcolumn2">
    <?php endif; ?>
        <div>
            <h5><?php echo $news->getTitle() ?></h5>
            <img src="images/ico-med-<?php echo $count ?>.png" alt="" class="abouticon" />
            <?php echo $news->getContent() ?>
            
            <?php if($news->getType()!='Site'): ?>
                <div class="insidereadmore">
                    <a href="<?php echo $news->getLink() ?>">Lire la suite...</a>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <?php if($count%2): ?>
        <div class="clear"></div>
    <?php endif; ?>
<?php endforeach;?>
