<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rlm_news->getId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $rlm_news->getType() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $rlm_news->getTitle() ?></td>
    </tr>
    <tr>
      <th>Content:</th>
      <td><?php echo $rlm_news->getContent() ?></td>
    </tr>
    <tr>
      <th>Link:</th>
      <td><?php echo $rlm_news->getLink() ?></td>
    </tr>
    <tr>
      <th>Homepage:</th>
      <td><?php echo $rlm_news->getHomepage() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $rlm_news->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $rlm_news->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('news/edit?id='.$rlm_news->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('news/index') ?>">List</a>
