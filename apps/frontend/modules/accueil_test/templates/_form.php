<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('accueil_test/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('accueil_test/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'accueil_test/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['on_dit']->renderLabel() ?></th>
        <td>
          <?php echo $form['on_dit']->renderError() ?>
          <?php echo $form['on_dit'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['on_dit_pas']->renderLabel() ?></th>
        <td>
          <?php echo $form['on_dit_pas']->renderError() ?>
          <?php echo $form['on_dit_pas'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['auteur']->renderLabel() ?></th>
        <td>
          <?php echo $form['auteur']->renderError() ?>
          <?php echo $form['auteur'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mail']->renderLabel() ?></th>
        <td>
          <?php echo $form['mail']->renderError() ?>
          <?php echo $form['mail'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['valide']->renderLabel() ?></th>
        <td>
          <?php echo $form['valide']->renderError() ?>
          <?php echo $form['valide'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
