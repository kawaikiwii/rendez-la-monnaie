<h1>Rlm contacts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Address</th>
      <th>Phone number</th>
      <th>Email address</th>
      <th>Question</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rlm_contacts as $rlm_contact): ?>
    <tr>
      <td><a href="<?php echo url_for('contact/show?id='.$rlm_contact->getId()) ?>"><?php echo $rlm_contact->getId() ?></a></td>
      <td><?php echo $rlm_contact->getFirstName() ?></td>
      <td><?php echo $rlm_contact->getLastName() ?></td>
      <td><?php echo $rlm_contact->getAddress() ?></td>
      <td><?php echo $rlm_contact->getPhoneNumber() ?></td>
      <td><?php echo $rlm_contact->getEmailAddress() ?></td>
      <td><?php echo $rlm_contact->getQuestion() ?></td>
      <td><?php echo $rlm_contact->getCreatedAt() ?></td>
      <td><?php echo $rlm_contact->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('contact/new') ?>">New</a>
