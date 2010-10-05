<?php

/**
 * FolhasPagamentos form base class.
 *
 * @method FolhasPagamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFolhasPagamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'dt_compet_fl'        => new sfWidgetFormInputHidden(),
      'tp_folha'            => new sfWidgetFormInputHidden(),
      'dt_emissao_fl'       => new sfWidgetFormInputHidden(),
      'dt_ref_fl'           => new sfWidgetFormInputText(),
      'vl_total_item_fl'    => new sfWidgetFormInputText(),
      'vl_total_ded_fl'     => new sfWidgetFormInputText(),
      'vl_total_extra_fl'   => new sfWidgetFormInputText(),
      'agentes_folhas_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ConcessoesItens')),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_compet_fl'        => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentos', 'column' => 'dt_compet_fl', 'required' => false)),
      'tp_folha'            => new sfValidatorPropelChoice(array('model' => 'TiposFolhas', 'column' => 'tp_folha', 'required' => false)),
      'dt_emissao_fl'       => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentos', 'column' => 'dt_emissao_fl', 'required' => false)),
      'dt_ref_fl'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_total_item_fl'    => new sfValidatorNumber(),
      'vl_total_ded_fl'     => new sfValidatorNumber(),
      'vl_total_extra_fl'   => new sfValidatorNumber(),
      'agentes_folhas_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ConcessoesItens', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('folhas_pagamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FolhasPagamentos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['agentes_folhas_list']))
    {
      $values = array();
      foreach ($this->object->getAgentesFolhass() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('agentes_folhas_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveAgentesFolhasList($con);
  }

  public function saveAgentesFolhasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['agentes_folhas_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(AgentesFolhasPeer::DT_COMPET_FL, $this->object->getPrimaryKey());
    AgentesFolhasPeer::doDelete($c, $con);

    $values = $this->getValue('agentes_folhas_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new AgentesFolhas();
        $obj->setDtCompetFl($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
