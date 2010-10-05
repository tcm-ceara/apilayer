<h1>Métodos</h1>
<a href="<?php echo url_for('tabs/new') ?>">Novo</a>

<table  border="1">
  <thead>
    <tr>
      <th>Tabela</th>
      <th>Método</th>
      <th>Grupo</th>
      <th>Tem descrição</th>
      <th>Ativa</th>
      <th>Quant. de Campos</th>
      <th>Campos Ativos</th>
      <th>Campos Entrada</th>
      <th>Campos Requeridos</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tabelass as $Tabelas): ?>
    <tr>
      <!--td><a href="<?php echo url_for('tabs/show?id_tabela='.$Tabelas->getIdTabela()) ?>"><?php echo $Tabelas->getIdTabela() ?></a></td-->
      <td><?php echo $Tabelas->getNmTabela() ?></td>
      <td><?php echo $Tabelas->getNmPopularTabela() ?></td>
      <td><?php echo $Tabelas->getTabelaGrupos()->getNmGrupo() ?></td>
      <td align="center"><?php echo trim($Tabelas->getDeTabela())==''?'N':'S'; ?></td>
      <td align="center"><?php echo $Tabelas->getFlAtivo() ?></td>
      <td align="center"><?php echo $Tabelas->countDicionarioDadoss() ?></td>
      <td align="center"><?php echo $Tabelas->getCampos(true) ?></td>
      <td align="center"><?php echo $Tabelas->getCamposEntrada(true) ?></td>
      <td align="center"><?php echo $Tabelas->getCamposRequerido(true) ?></td>

      <td><a href="<?php echo url_for('tabs/show?id_tabela='.$Tabelas->getIdTabela()) ?>">Exibir</a></td>
      <td><?php echo link_to('Excluir', 'tabs/delete?id_tabela='.$Tabelas->getIdTabela(), array('method' => 'delete', 'confirm' => 'Você tem certeza que deseja excluir?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
