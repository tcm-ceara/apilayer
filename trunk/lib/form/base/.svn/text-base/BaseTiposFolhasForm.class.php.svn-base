<?php

/**
 * TiposFolhas form base class.
 *
 * @method TiposFolhas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposFolhasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tp_folha'               => new sfWidgetFormInputHidden(),
      'de_folha'               => new sfWidgetFormInputText(),
      'folhas_pagamentos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
    ));

    $this->setValidators(array(
      'tp_folha'               => new sfValidatorPropelChoice(array('model' => 'TiposFolhas', 'column' => 'tp_folha', 'required' => false)),
      'de_folha'               => new sfValidatorString(array('max_length' => 30)),
      'folhas_pagamentos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipos_folhas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposFolhas';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['folhas_pagamentos_list']))
    {
      $values = array();
      foreach ($this->object->getFolhasPagamentoss() as $obj)
      {
        $values[] = $obj->getDtVersaoOrc();
      }

      $this->setDefault('folhas_pagamentos_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveFolhasPagamentosList($con);
  }

  public function saveFolhasPagamentosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['folhas_pagamentos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(FolhasPagamentosPeer::TP_FOLHA, $this->object->getPrimaryKey());
    FolhasPagamentosPeer::doDelete($c, $con);

    $values = $this->getValue('folhas_pagamentos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new FolhasPagamentos();
        $obj->setTpFolha($this->object->getPrimaryKey());
        $obj->setDtVersaoOrc($value);
        $obj->save();
      }
    }
  }

}
