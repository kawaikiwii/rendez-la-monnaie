<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@rlm_login') ?>" method="post" id="login">      
    <?php echo $form;?>
    <input type="submit" value="<?php echo __('Ok', null, 'sf_guard') ?>" class="button2" />
</form>