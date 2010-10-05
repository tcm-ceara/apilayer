<?php

/**
 * tables actions.
 *
 * @package    sim
 * @subpackage tables
 * @author     Your name here
 */
class tablesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $c->add(TabelasPeer::FL_ATIVO,'S');
	$c->addJoin(TabelasPeer::ID_GRUPO,TabelaGruposPeer::ID_GRUPO,Criteria::LEFT_JOIN);
	$c->addAscendingOrderByColumn(TabelaGruposPeer::FL_ORDEM);
    $c->addAscendingOrderByColumn(TabelasPeer::ID_GRUPO);
    $this->Tabelass = TabelasPeer::doSelect($c);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tabelas = TabelasPeer::retrieveByPk($request->getParameter('id_tabela'));
    $this->forward404Unless($this->Tabelas);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tabelas = $form->save();

      $this->redirect('tables/edit?id_tabela='.$Tabelas->getIdTabela());
    }
  }
}
