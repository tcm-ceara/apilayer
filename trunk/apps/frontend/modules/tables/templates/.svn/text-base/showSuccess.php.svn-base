<h1>Método: <?php echo $Tabelas->getNmPopularTabela() ?></h1>
<h2>Descrição: <?php echo $Tabelas->getDeTabela() ?> </h2>
<h2>Grupo: <?php echo $Tabelas->getTabelaGrupos()->getNmGrupo() ?> </h2>
<h2>URL: http://api.tcm.ce.gov.br<?php echo url_for('@api?method='.$Tabelas->getNmPopularTabela().'&sys='.$Tabelas->getNmConexao()) ?>.&lt;formato&gt;</h2>
<hr/>
<h2>Parâmetros da Solicitação</h2>
<table>
<tr>
<th>Campo</th><th>Tipo</th><th>Obrigatorio</th><th>Descrição</th>
</tr>
<?php	foreach ($Tabelas->getCamposEntrada() as $campo)
{
	echo sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$campo->getNmPopularCampo(),$campo->getCampoTipos()->getNmTipo(),$campo->getFlRequerido(),$campo->getDeCampo());
	
} ?> 
</table>
<h2>Informações da Resposta</h2>
<table>
<tr>
<th>Campo</th><th>Descrição</th>
</tr>
<?php	foreach ($Tabelas->getCampos() as $campo)
{
	echo sprintf("<tr><td>%s</td><td>%s</td></tr>",$campo->getNmPopularCampo(),$campo->getDeCampo());
	
} ?> 
</table>
