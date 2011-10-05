<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rlm_good_deal->getId() ?></td>
    </tr>
    <tr>
      <th>Partner:</th>
      <td><?php echo $rlm_good_deal->getPartnerId() ?></td>
    </tr>
    <!--<tr>
      <th>Type:</th>
      <td><?php //echo $rlm_good_deal->getType() ?></td>
    </tr>-->
    <tr>
      <th>Content:</th>
      <td><?php echo $rlm_good_deal->getContent() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $rlm_good_deal->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $rlm_good_deal->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('goodDeal/edit?id='.$rlm_good_deal->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('goodDeal/index') ?>">List</a>
