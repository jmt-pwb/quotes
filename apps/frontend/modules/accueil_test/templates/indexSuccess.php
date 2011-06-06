<h1>Quotes List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>On dit</th>
      <th>On dit pas</th>
      <th>Auteur</th>
      <th>Mail</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Valide</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($quotes as $quote): ?>
    <tr>
      <td><a href="<?php echo url_for('accueil_test/edit?id='.$quote->getId()) ?>"><?php echo $quote->getId() ?></a></td>
      <td><?php echo $quote->getOnDit() ?></td>
      <td><?php echo $quote->getOnDitPas() ?></td>
      <td><?php echo $quote->getAuteur() ?></td>
      <td><?php echo $quote->getMail() ?></td>
      <td><?php echo $quote->getCreatedAt() ?></td>
      <td><?php echo $quote->getUpdatedAt() ?></td>
      <td><?php echo $quote->getValide() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('accueil_test/new') ?>">New</a>
