<?php

/**
 * dic actions.
 *
 * @package    sim
 * @subpackage dic
 * @author     Your name here
 */
class dicActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->DicionarioDadoss = DicionarioDadosPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->DicionarioDados = DicionarioDadosPeer::retrieveByPk($request->getParameter('id_campo'));
    $this->forward404Unless($this->DicionarioDados);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DicionarioDadosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DicionarioDadosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($DicionarioDados = DicionarioDadosPeer::retrieveByPk($request->getParameter('id_campo')), sprintf('Object DicionarioDados does not exist (%s).', $request->getParameter('id_campo')));
    $this->form = new DicionarioDadosForm($DicionarioDados);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($DicionarioDados = DicionarioDadosPeer::retrieveByPk($request->getParameter('id_campo')), sprintf('Object DicionarioDados does not exist (%s).', $request->getParameter('id_campo')));
    $this->form = new DicionarioDadosForm($DicionarioDados);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($DicionarioDados = DicionarioDadosPeer::retrieveByPk($request->getParameter('id_campo')), sprintf('Object DicionarioDados does not exist (%s).', $request->getParameter('id_campo')));
    $DicionarioDados->delete();

    $this->redirect('tabs/show?id_tabela='.$DicionarioDados->getTabelas()->getIdTabela());
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $DicionarioDados = $form->save();

      //$this->redirect('dic/edit?id_campo='.$DicionarioDados->getIdCampo());
      $this->redirect('tabs/show?id_tabela='.$DicionarioDados->getTabelas()->getIdTabela());
    }
  }
}
