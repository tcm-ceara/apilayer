<h1>Tipos</h1>

<a href="<?php echo url_for('tipos/new') ?>">Novo</a>
<table border="1">
  <thead>
    <tr>
      <th>Tipo</th>
      <th>Descrição</th>
      <th>Ativo</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($CampoTiposs as $CampoTipos): ?>
    <tr>
      <td><?php echo $CampoTipos->getNmTipo() ?></td>
      <td><?php echo $CampoTipos->getDeTabela() ?></td>
      <td align="center"><?php echo $CampoTipos->getFlAtivo() ?></td>
      <td><a href="<?php echo url_for('tipos/show?id_tipo='.$CampoTipos->getIdTipo()) ?>">Exibir</a></td>
      <td><?php echo link_to('Excluir', 'tipos/delete?id_tipo='.$CampoTipos->getIdTipo(), array('method' => 'delete', 'confirm' => 'Você tem certeza que deseja excluir?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


