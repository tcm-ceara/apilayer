<?php

/**
 * FolhasPagamentosDel form base class.
 *
 * @method FolhasPagamentosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFolhasPagamentosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputText(),
      'dt_versao_orc'     => new sfWidgetFormInputText(),
      'cd_orgao'          => new sfWidgetFormInputText(),
      'cd_unid_orc'       => new sfWidgetFormInputText(),
      'dt_compet_fl'      => new sfWidgetFormInputText(),
      'tp_folha'          => new sfWidgetFormInputText(),
      'dt_emissao_fl'     => new sfWidgetFormDateTime(),
      'dt_ref_fl'         => new sfWidgetFormInputText(),
      'vl_total_item_fl'  => new sfWidgetFormInputText(),
      'vl_total_ded_fl'   => new sfWidgetFormInputText(),
      'vl_total_extra_fl' => new sfWidgetFormInputText(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'          => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'       => new sfValidatorString(array('max_length' => 4)),
      'dt_compet_fl'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_folha'          => new sfValidatorString(array('max_length' => 2)),
      'dt_emissao_fl'     => new sfValidatorDateTime(),
      'dt_ref_fl'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_total_item_fl'  => new sfValidatorNumber(),
      'vl_total_ded_fl'   => new sfValidatorNumber(),
      'vl_total_extra_fl' => new sfValidatorNumber(),
      'id'                => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('folhas_pagamentos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FolhasPagamentosDel';
  }


}
