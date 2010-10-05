<?php

/**
 * tipos actions.
 *
 * @package    sim
 * @subpackage tipos
 * @author     Your name here
 */
class tiposActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->CampoTiposs = CampoTiposPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->CampoTipos = CampoTiposPeer::retrieveByPk($request->getParameter('id_tipo'));
    $this->forward404Unless($this->CampoTipos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CampoTiposForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CampoTiposForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($CampoTipos = CampoTiposPeer::retrieveByPk($request->getParameter('id_tipo')), sprintf('Object CampoTipos does not exist (%s).', $request->getParameter('id_tipo')));
    $this->form = new CampoTiposForm($CampoTipos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($CampoTipos = CampoTiposPeer::retrieveByPk($request->getParameter('id_tipo')), sprintf('Object CampoTipos does not exist (%s).', $request->getParameter('id_tipo')));
    $this->form = new CampoTiposForm($CampoTipos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($CampoTipos = CampoTiposPeer::retrieveByPk($request->getParameter('id_tipo')), sprintf('Object CampoTipos does not exist (%s).', $request->getParameter('id_tipo')));
    $CampoTipos->delete();

    $this->redirect('tipos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $CampoTipos = $form->save();

      //$this->redirect('tipos/edit?id_tipo='.$CampoTipos->getIdTipo());
      $this->redirect('tipos/index');
    }
  }
}
