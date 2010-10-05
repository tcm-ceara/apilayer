<h1>Métodos</h1>
<a href="<?php echo url_for('@homepage') ?>">Voltar</a>
<p>Verifique aqui os métodos disponíveis para acesso aos dados do TCM/CE</p>
<?php	$grupo=''; ?> 
<?php foreach ($Tabelass as $Tabelas): ?>
<?php if($grupo<>$Tabelas->getTabelaGrupos()->getNmGrupo())	{
$grupo=$Tabelas->getTabelaGrupos()->getNmGrupo();
echo "<br/><hr/><h2>$grupo</h2>";
}
 ?> 
<h3><?php echo link_to($Tabelas->getNmPopularTabela(),'@method_doc?id_tabela='.$Tabelas->getIdTabela().'&nm_popular_tabela='.$Tabelas->getNmPopularTabela()) ?> <?php echo $Tabelas->getDeTabela() ?> </h3>
<?php endforeach; ?>
<br/>


