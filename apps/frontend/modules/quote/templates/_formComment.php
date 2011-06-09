<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div><h5>Ajouter un commentaire</h5>

<form action="<?php echo url_for('quote/show?id='.$id) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
      <?php echo $form ?>
		<th></th>
		<td>      
          <input type="submit" value="Envoyer" />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</div>