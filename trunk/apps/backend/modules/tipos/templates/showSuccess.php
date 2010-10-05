<a href="<?php echo url_for('tipos/index') ?>">Voltar</a>
<h1>Tipo: <?php echo $CampoTipos->getNmTipo() ?></h1>
<table>
  <tbody>
    <tr>
      <th>Descrição:</th>
      <td><?php echo $CampoTipos->getDeTabela() ?></td>
    </tr>
    <tr>
      <th>Ativo:</th>
      <td><?php echo $CampoTipos->getFlAtivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipos/edit?id_tipo='.$CampoTipos->getIdTipo()) ?>">Editar</a>


