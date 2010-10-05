<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('tables/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_tabela='.$form->getObject()->getIdTabela() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('tables/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'tables/delete?id_tabela='.$form->getObject()->getIdTabela(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nm_tabela']->renderLabel() ?></th>
        <td>
          <?php echo $form['nm_tabela']->renderError() ?>
          <?php echo $form['nm_tabela'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nm_popular_tabela']->renderLabel() ?></th>
        <td>
          <?php echo $form['nm_popular_tabela']->renderError() ?>
          <?php echo $form['nm_popular_tabela'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['de_tabela']->renderLabel() ?></th>
        <td>
          <?php echo $form['de_tabela']->renderError() ?>
          <?php echo $form['de_tabela'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fl_ativo']->renderLabel() ?></th>
        <td>
          <?php echo $form['fl_ativo']->renderError() ?>
          <?php echo $form['fl_ativo'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
