<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_register') ?>" method="post">

<?php echo $form['_csrf_token'] ?>
<table width="97%">
	<tr>
		<td width="145" align="left" valign="top" class="fontform" id="Company"><strong><?php echo $form['last_name']->renderLabel() ?></strong></td>
		<td width="280" align="left" valign="top"><?php echo $form['last_name'] ?></td>
	</tr>
	<tr>
            <td><?php echo $form['last_name']->renderError() ?></td>
        </tr>
	<tr>
		<td align="left" valign="top" class="fontform" id="Contact"><strong><?php echo $form['first_name']->renderLabel() ?></strong></td>
		<td align="left" valign="top"><?php echo $form['first_name'] ?></td>
	</tr>
	<tr>
            <td><?php echo $form['first_name']->renderError() ?></td>
        </tr>
	<tr>
		<td align="left" valign="top" class="fontform" id="Address"><strong><?php echo $form['address']->renderLabel() ?></strong></td>
		<td align="left" valign="top"><?php echo $form['address'] ?></td>
	</tr>
	<tr>
            <td><?php echo $form['address']->renderError() ?></td>
        </tr>
	<tr>
		<td width="170" align="left" valign="top" class="fontform" id="Company"><strong><?php echo $form['birthday']->renderLabel() ?></strong></td>
		<td><?php echo $form['birthday'] ?></td>
    </tr>
    <tr>
        <td><?php echo $form['birthday']->renderError() ?></td>
    </tr>
    <tr>
     	<td align="left" valign="top" class="fontform" id="Phone"><strong><?php echo $form['phone_number']->renderLabel() ?></strong></td>
        <td align="left" valign="top"><?php echo $form['phone_number'] ?></td>
    </tr>
    <tr>
        <td><?php echo $form['phone_number']->renderError() ?></td>
    </tr>
    <tr>
        <td align="left" valign="top" class="fontform" id="Email"><strong><?php echo $form['email_address']->renderLabel() ?></strong></td>
        <td align="left" valign="top"><?php echo $form['email_address'] ?></td>
    </tr>
    <tr>
        <td><?php echo $form['email_address']->renderError() ?></td>
    </tr>
    <tr>
        <td align="left" valign="top" class="fontform" id="Email"><strong><?php echo $form['username']->renderLabel() ?></strong></td>
        <td align="left" valign="top"><?php echo $form['username'] ?></td>
    </tr>
    <tr>
        <td><?php echo $form['username']->renderError() ?></td>
    </tr>
    <tr>
        <td align="left" valign="top" class="fontform" id="Email"><strong><?php echo $form['password']->renderLabel() ?></strong></td>
        <td align="left" valign="top"><?php echo $form['password'] ?></td>
    </tr>
    <tr>
        <td><?php echo $form['password']->renderError() ?></td>
    </tr>
    <tr>
        <td align="left" valign="top" class="fontform" id="Email"><strong><?php echo $form['password_again']->renderLabel() ?></strong></td>
        <td align="left" valign="top"><?php echo $form['password_again'] ?></td>
    </tr>
    <tr>
        <td><?php echo $form['password_again']->renderError() ?></td>
    </tr>
    <tr>
        <td colspan="2">
          <input border="0" border-color="#FFF" id="stylebtn" align="absbottom" type="image" name="register" value="<?php echo __('J\'en profite !', null, 'sf_guard') ?>" src="../images/bt.gif" />
        </td>
    </tr>
</table>





  <!-- <table width="97%">
    <?php //echo $form ?>
    <tfoot>
    <tr>
        <td colspan="2">
          <input type="submit" name="register" value="<?php //echo __('Register', null, 'sf_guard') ?>" />
        </td>
    </tr>  
    </tfoot>
  </table> -->
</form>