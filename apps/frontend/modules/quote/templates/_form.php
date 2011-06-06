<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div><h2>Proposer une blague</h2>

<form action="<?php echo url_for('quote/new') ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
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
          <input type="submit" value="Proposer" />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</div>