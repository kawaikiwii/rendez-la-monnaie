<h1>Rlm newss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Type</th>
      <th>Title</th>
      <th>Content</th>
      <th>Link</th>
      <th>Homepage</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rlm_newss as $rlm_news): ?>
    <tr>
      <td><a href="<?php echo url_for('news/show?id='.$rlm_news->getId()) ?>"><?php echo $rlm_news->getId() ?></a></td>
      <td><?php echo $rlm_news->getType() ?></td>
      <td><?php echo $rlm_news->getTitle() ?></td>
      <td><?php echo $rlm_news->getContent() ?></td>
      <td><?php echo $rlm_news->getLink() ?></td>
      <td><?php echo $rlm_news->getCreatedAt() ?></td>
      <td><?php echo $rlm_news->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('news/new') ?>">New</a>
