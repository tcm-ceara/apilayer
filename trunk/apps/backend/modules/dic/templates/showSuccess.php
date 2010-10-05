<a href="<?php echo url_for('tabs/index') ?>">Voltar</a>
<h1>Campo: <?php echo $DicionarioDados->getNmCampo() ?></h1>
<table>
  <tbody>
    <tr>
      <th>Tabela:</th>
      <td><?php echo $DicionarioDados->getTabelas()->getNmTabela() ?></td>
    </tr>

    <tr>
      <th>Tipo:</th>
      <td><?php echo $DicionarioDados->getCampoTipos()->getNmTipo() ?></td>
    </tr>
   
    <tr>
      <th>Nome Popular:</th>
      <td><?php echo $DicionarioDados->getNmPopularCampo() ?></td>
    </tr>
    <tr>
      <th>Descrição:</th>
      <td><?php echo $DicionarioDados->getDeCampo() ?></td>
    </tr>
    <tr>
      <th>Requerido:</th>
      <td><?php echo $DicionarioDados->getFlRequerido() ?></td>
    </tr>
    <tr>
      <th>Entrada:</th>
      <td><?php echo $DicionarioDados->getFlEntrada() ?></td>
    </tr>
    <tr>
      <th>Ativo:</th>
      <td><?php echo $DicionarioDados->getFlAtivo() ?></td>
    </tr>
  </tbody>
</table>
<hr />

<a href="<?php echo url_for('dic/edit?id_campo='.$DicionarioDados->getIdCampo()) ?>">Editar</a>
