<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      zefzef
  	<div id="container">
<div class="header">
<div class="login">
<?php if($sf_user->isAuthenticated()): ?>
	<?php echo $sf_user->getUsername().' '.link_to('D&eacute;connexion', 'sf_guard_signout').'<br />';?>
<?php else : ?>
	<?php
            echo include_component('login', 'login_form');
        ?>
<?php endif; ?>

</div>
<div class="logo floatl"><a href="<?php echo url_for('@homepage') ?>"><img src="../images/logo.gif" alt="" /></a></div>
<div class="top-links floatr">
<ul>
<li><a href="<?php echo url_for('@homepage') ?>" class="active"> <span>Accueil</span></a></li>
<li><a href="about-us.html"><span>FAQ</span></a></li>
<li><a href="<?php echo url_for('@rlm_good_deal') ?>"><span>Bon Plans</span></a></li>
<li><a href="<?php echo url_for('@rlm_contact') ?>"><span>Contact</span></a></li>
</ul>
<div class="clear"></div>

</div>
<div class="clear"></div>
</div>
<?php if ($sf_user->hasFlash('notice')): ?>
<div class="flash_notice">
	<?php echo $sf_user->getFlash('notice') ?>
</div>
<?php endif ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="flash_error">
    <?php echo $sf_user->getFlash('error') ?>
</div>
<?php endif ?>

<div class="content-box">
<div class="col-2 floatl">
	<img src="../images/recent-icon.gif" alt="" class="floatl" />
	<h1>Promo de la semaine</h1>
	<span>-50% sur les abonnements de 6 mois
	cette semaine seulement!!</span>
	<div class="clear"></div>					
	<?php //include_partial('actu/list', array('actus' => Doctrine_Core::getTable('RlmActu')->getLastActus())) ?>

</div>
</div>
<div class="col-inner floatl">
<div>
	<div>

       	</div>
          <div>
            <div class="inscription"></div>
 			<div class="formulaire">  
              <?php echo $sf_content;?>
            </div>
          </div>
         <div>
            <p><br />
            </p>
          </div>
	</div>
<div class="clear"></div>

 </div>
 
<div class="clear"></div>
</div> 
<?php echo get_partial('home/footer'); ?>
</div>


  </body>
</html>
 
