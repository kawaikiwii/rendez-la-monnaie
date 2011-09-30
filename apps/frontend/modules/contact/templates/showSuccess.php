<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rlm_contact->getId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $rlm_contact->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $rlm_contact->getLastName() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $rlm_contact->getAddress() ?></td>
    </tr>
    <tr>
      <th>Phone number:</th>
      <td><?php echo $rlm_contact->getPhoneNumber() ?></td>
    </tr>
    <tr>
      <th>Email address:</th>
      <td><?php echo $rlm_contact->getEmailAddress() ?></td>
    </tr>
    <tr>
      <th>Question:</th>
      <td><?php echo $rlm_contact->getQuestion() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $rlm_contact->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $rlm_contact->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('contact/edit?id='.$rlm_contact->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('contact/index') ?>">List</a>
