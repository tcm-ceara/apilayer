<?php

/**
 * tabs actions.
 *
 * @package    sim
 * @subpackage tabs
 * @author     Your name here
 */
class tabsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tabelass = TabelasPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Tabelas = TabelasPeer::retrieveByPk($request->getParameter('id_tabela'));
    $this->forward404Unless($this->Tabelas);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TabelasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TabelasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Tabelas = TabelasPeer::retrieveByPk($request->getParameter('id_tabela')), sprintf('Object Tabelas does not exist (%s).', $request->getParameter('id_tabela')));
    $this->form = new TabelasForm($Tabelas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Tabelas = TabelasPeer::retrieveByPk($request->getParameter('id_tabela')), sprintf('Object Tabelas does not exist (%s).', $request->getParameter('id_tabela')));
    $this->form = new TabelasForm($Tabelas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Tabelas = TabelasPeer::retrieveByPk($request->getParameter('id_tabela')), sprintf('Object Tabelas does not exist (%s).', $request->getParameter('id_tabela')));
    $Tabelas->delete();

    $this->redirect('tabs/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tabelas = $form->save();

      //$this->redirect('tabs/edit?id_tabela='.$Tabelas->getIdTabela());
      $this->redirect('tabs/index');
    }
  }
}
