<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rlm_partner->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $rlm_partner->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $rlm_partner->getDescription() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $rlm_partner->getLogo() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $rlm_partner->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $rlm_partner->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>
<!--
<hr />
<a href="<?php //echo url_for('partner/edit?id='.$rlm_partner->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php //echo url_for('partner/index') ?>">List</a>
-->