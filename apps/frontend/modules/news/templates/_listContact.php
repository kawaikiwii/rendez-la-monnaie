<div class="col-1 floatl">
    <img src="images/news-icon.gif" class="floatl" alt="" /><h1>News &amp; Events</h1>
    <span>Retrouvez toute l&rsquo;actualit&eacute; de Rendez-la-monnaie</span>
    <div class="clear"></div>
    <ul>
        <?php foreach($rlm_newss as $count=>$news):?>
        <li>
            <a href="<?php echo $news->getLink() ?>"><?php echo $news->getTitle() ?></a>
            <p><?php echo $news->getContent() ?></p>
        </li>
        <?php endforeach;?>
    </ul>
    <div class="clear"></div>
</div>
