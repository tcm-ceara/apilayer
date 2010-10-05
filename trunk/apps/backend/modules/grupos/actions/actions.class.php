<?php

/**
 * grupos actions.
 *
 * @package    sim
 * @subpackage grupos
 * @author     Your name here
 */
class gruposActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->TabelaGruposs = TabelaGruposPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->TabelaGrupos = TabelaGruposPeer::retrieveByPk($request->getParameter('id_grupo'));
    $this->forward404Unless($this->TabelaGrupos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TabelaGruposForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TabelaGruposForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($TabelaGrupos = TabelaGruposPeer::retrieveByPk($request->getParameter('id_grupo')), sprintf('Object TabelaGrupos does not exist (%s).', $request->getParameter('id_grupo')));
    $this->form = new TabelaGruposForm($TabelaGrupos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($TabelaGrupos = TabelaGruposPeer::retrieveByPk($request->getParameter('id_grupo')), sprintf('Object TabelaGrupos does not exist (%s).', $request->getParameter('id_grupo')));
    $this->form = new TabelaGruposForm($TabelaGrupos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($TabelaGrupos = TabelaGruposPeer::retrieveByPk($request->getParameter('id_grupo')), sprintf('Object TabelaGrupos does not exist (%s).', $request->getParameter('id_grupo')));
    $TabelaGrupos->delete();

    $this->redirect('grupos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $TabelaGrupos = $form->save();

      //$this->redirect('grupos/edit?id_grupo='.$TabelaGrupos->getIdGrupo());
      $this->redirect('grupos/index');
    }
  }
}
