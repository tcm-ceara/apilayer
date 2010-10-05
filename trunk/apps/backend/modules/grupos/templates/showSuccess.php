<a href="<?php echo url_for('grupos/index') ?>">Voltar</a>
<h1>Grupo: <?php echo $TabelaGrupos->getNmGrupo() ?></h1>
<table>
  <tbody>
    <tr>
      <th>Ordem:</th>
      <td><?php echo $TabelaGrupos->getFlOrdem() ?></td>
    </tr>
    <tr>
      <th>Descrição:</th>
      <td><?php echo $TabelaGrupos->getDeGrupo() ?></td>
    </tr>
    <tr>
      <th>Ativo:</th>
      <td><?php echo $TabelaGrupos->getFlAtivo() ?></td>
    </tr> 
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('grupos/edit?id_grupo='.$TabelaGrupos->getIdGrupo()) ?>">Edit</a>
