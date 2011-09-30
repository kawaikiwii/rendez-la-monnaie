<h1>Rlm partners List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Logo</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rlm_partners as $rlm_partner): ?>
    <tr>
      <td><a href="<?php echo url_for('partner/show?id='.$rlm_partner->getId()) ?>"><?php echo $rlm_partner->getId() ?></a></td>
      <td><?php echo $rlm_partner->getName() ?></td>
      <td><?php echo $rlm_partner->getDescription() ?></td>
      <td><?php echo $rlm_partner->getLogoB() ?></td>
      <td><?php echo $rlm_partner->getCreatedAt() ?></td>
      <td><?php echo $rlm_partner->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('partner/new') ?>">New</a>
