<h1>Grupos</h1>

<a href="<?php echo url_for('grupos/new') ?>">Novo</a>

<table border="1">
  <thead>
    <tr>
      <th>Ordem</th>
      <th>Grupo</th>
      <th>Descrição</th>
      <th>Ativo</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TabelaGruposs as $TabelaGrupos): ?>
    <tr>      
      <td align="center"><?php echo $TabelaGrupos->getFlOrdem() ?></td>
      <td><?php echo $TabelaGrupos->getNmGrupo() ?></td>
      <td><?php echo $TabelaGrupos->getDeGrupo() ?></td>
      <td align="center"><?php echo $TabelaGrupos->getFlAtivo() ?></td>
      <td><a href="<?php echo url_for('grupos/show?id_grupo='.$TabelaGrupos->getIdGrupo()) ?>">Exibir</a></td>
      <td><?php echo link_to('Excluir', 'grupos/delete?id_grupo='.$TabelaGrupos->getIdGrupo(), array('method' => 'delete', 'confirm' => 'Você tem certeza que deseja excluir?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
