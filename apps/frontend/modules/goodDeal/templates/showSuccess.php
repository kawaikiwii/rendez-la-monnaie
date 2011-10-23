<?php foreach($rlm_good_deal as $gd):?>

<table>
  <tbody>
    <!--<tr>
      <th>Id:</th>
      <td><?php //echo $gd->getId() ?></td>
    </tr>-->
    <tr>
      <th>Partenaire:</th>
      <td><?php echo $gd->getRlmPartner()->getName() ?></td>
    </tr>
    <!--<tr>
      <th>Type:</th>
      <td><?php //echo $rlm_good_deal->getType() ?></td>
    </tr>-->
    <tr>
      <th>Description:</th>
      <td><?php echo $gd->getContent() ?></td>
    </tr>
    <!--<tr>
      <th>Créé le:</th>
      <td><?php //echo $gd->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Mis à jour le:</th>
      <td><?php //echo $gd->getUpdatedAt() ?></td>
    </tr>-->
  </tbody>
</table>

<!--<hr />

<a href="<?php //echo url_for('goodDeal/edit?id='.$gd->getId()) ?>">Editer</a>
&nbsp;
<a href="<?php //echo url_for('goodDeal/index') ?>">Retour à la recherche</a>-->
<?php endforeach;?>