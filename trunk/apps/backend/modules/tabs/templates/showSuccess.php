<a href="<?php echo url_for('tabs/index') ?>">Voltar</a>
<h1>Método: <?php echo $Tabelas->getNmTabela() ?></h1>
<table>
  <tbody>    
    <tr>
      <th>Grupo:</th>
      <td><?php echo $Tabelas->getTabelaGrupos()->getNmGrupo() ?></td>
    </tr>    
    <tr>
      <th>Popular:</th>
      <td><?php echo $Tabelas->getNmPopularTabela() ?></td>
    </tr>
    <tr>
      <th>Descrição:</th>
      <td><?php echo $Tabelas->getDeTabela() ?></td>
    </tr>
    <tr>
      <th>Ativa:</th>
      <td><?php echo $Tabelas->getFlAtivo() ?></td>
    </tr>
    <tr>
      <th>Conexão:</th>
      <td><?php echo $Tabelas->getNmConexao() ?></td>
    </tr>
  </tbody>
</table>

<a href="<?php echo url_for('tabs/edit?id_tabela='.$Tabelas->getIdTabela()) ?>">Editar</a>
<hr />
<h2>Campos</h2>
<a href="<?php echo url_for('dic/new') ?>">Novo</a>
<table border=1>
  <thead>
    <tr>            
      <th>Nome</th>
      <th>Popular</th>
      <th>Tipo</th>
      <th>Descrição</th>
      <th>Ativo</th>      
      <th>Entrada</th>     
      <th>Requerido</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tabelas->getDicionarioDadoss() as $DicionarioDados): ?>
    <tr>
      <td><a href="<?php echo url_for('dic/show?id_campo='.$DicionarioDados->getIdCampo()) ?>"><?php echo $DicionarioDados->getNmCampo()?></a></td>            
      <td><?php echo $DicionarioDados->getNmPopularCampo() ?></td>
      <td><?php echo $DicionarioDados->getCampoTipos()->getNmTipo() ?></td>
      <td align="center"><?php echo trim($DicionarioDados->getDeCampo())==''?'N':'S' ?></td>
      <td align="center"><?php echo $DicionarioDados->getFlAtivo() ?></td>
      <td align="center"><?php echo $DicionarioDados->getFlEntrada() ?></td>
      <td align="center"><?php echo $DicionarioDados->getFlRequerido() ?></td>

      <td><a href="<?php echo url_for('dic/show?id_campo='.$DicionarioDados->getIdCampo()) ?>">Exibir</a></td>
      <td><?php echo link_to('Excluir', 'dic/delete?id_campo='.$DicionarioDados->getIdCampo(), array('method' => 'delete', 'confirm' => 'Você tem certeza que deseja excluir?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
