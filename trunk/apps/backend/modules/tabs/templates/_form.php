<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<a href="<?php echo url_for('tabs/index') ?>">Voltar</a>

<form action="<?php echo url_for('tabs/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_tabela='.$form->getObject()->getIdTabela() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Excluir', 'tabs/delete?id_tabela='.$form->getObject()->getIdTabela(), array('method' => 'delete', 'confirm' => 'Você tem certeza que deseja excluir?')) ?>
          <?php endif; ?>
          <input type="submit" value="Salvar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
