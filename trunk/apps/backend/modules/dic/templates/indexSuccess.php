<h1>Campos</h1>
<a href="<?php echo url_for('dic/new') ?>">New</a>

<table>
  <thead>
    <tr>
      <th>Campo</th>
      <th>Nome Popular</th>
      <th>Descrição</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($DicionarioDadoss as $DicionarioDados): ?>
    <tr>
      <!--td><a href="<?php echo url_for('dic/show?id_campo='.$DicionarioDados->getIdCampo()) ?>"><?php echo $DicionarioDados->getIdCampo() ?></a></td-->
      <!--td><?php echo $DicionarioDados->getIdTabela() ?></td-->
      <!--td><?php echo $DicionarioDados->getIdTipo() ?></td-->
      <td><?php echo $DicionarioDados->getNmCampo() ?></td>
      <td><?php echo $DicionarioDados->getNmPopularCampo() ?></td>
      <td><?php echo $DicionarioDados->getDeCampo() ?></td>
      <!--td><?php echo $DicionarioDados->getFlRequerido() ?></td-->
      <!--td><?php echo $DicionarioDados->getFlAtivo() ?></td-->
      <!--td><?php echo $DicionarioDados->getFlEntrada() ?></td-->
      <!--td><?php echo $DicionarioDados->getDeFormato() ?></td-->
      <td><a href="<?php echo url_for('dic/show?id_campo='.$DicionarioDados->getIdCampo()) ?>">Exibir</a></td>
      <td><a href="<?php echo url_for('dic/edit?id_campo='.$DicionarioDados->getIdCampo()) ?>">Editar</a><td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


