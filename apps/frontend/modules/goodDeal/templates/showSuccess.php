<?php foreach($rlm_good_deal as $gd):?>

<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $gd->getId() ?></td>
    </tr>
    <tr>
      <th>Partner:</th>
      <td><?php echo $gd->getPartnerId() ?></td>
    </tr>
    <!--<tr>
      <th>Type:</th>
      <td><?php //echo $rlm_good_deal->getType() ?></td>
    </tr>-->
    <tr>
      <th>Content:</th>
      <td><?php echo $gd->getContent() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $gd->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $gd->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('goodDeal/edit?id='.$gd->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('goodDeal/index') ?>">List</a>
<?php endforeach;?>