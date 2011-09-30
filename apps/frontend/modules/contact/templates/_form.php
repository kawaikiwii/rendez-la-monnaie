<?php /*use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('contact/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('contact/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'contact/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
<?php */ ?>

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('contact/create') ?>" method="post">
    <?php echo $form['_csrf_token'] ?>
              <table width="97%">
                <tr>
                  <td width="145" align="left" valign="top" class="body" id="Company"><strong><?php echo $form['last_name']->renderLabel() ?></strong></td>
                  <td width="280" align="left" valign="top"><?php echo $form['last_name'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $form['last_name']->renderError() ?></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Contact"><strong><?php echo $form['first_name']->renderLabel() ?></strong></td>
                  <td align="left" valign="top"><?php echo $form['first_name'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $form['first_name']->renderError() ?></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Address"><strong><?php echo $form['address']->renderLabel() ?></strong></td>
                  <td align="left" valign="top"><?php echo $form['address'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $form['address']->renderError() ?></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Phone"><strong><?php echo $form['phone_number']->renderLabel() ?></strong></td>
                  <td align="left" valign="top"><?php echo $form['phone_number'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $form['phone_number']->renderError() ?></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Email"><strong><?php echo $form['email_address']->renderLabel() ?></strong></td>
                  <td align="left" valign="top"><?php echo $form['email_address'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $form['email_address']->renderError() ?></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Comments"><strong><?php echo $form['question']->renderLabel() ?></strong></td>
                  <td align="left" valign="top"><?php echo $form['question'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $form['question']->renderError() ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" class="button" value="Envoyer" /></td>
                </tr>

              </table>
            </form>
