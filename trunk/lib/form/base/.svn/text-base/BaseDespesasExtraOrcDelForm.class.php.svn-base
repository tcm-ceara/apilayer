<?php

/**
 * DespesasExtraOrcDel form base class.
 *
 * @method DespesasExtraOrcDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDespesasExtraOrcDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'cd_conta_ctx'         => new sfWidgetFormInputText(),
      'nu_banco_cb'          => new sfWidgetFormInputText(),
      'nu_agencia_cb'        => new sfWidgetFormInputText(),
      'nu_conta_corrente_cb' => new sfWidgetFormInputText(),
      'nu_docdesp_xd'        => new sfWidgetFormInputText(),
      'dt_ref_xd'            => new sfWidgetFormInputText(),
      'nu_doc_caixa_xd'      => new sfWidgetFormInputText(),
      'dt_emissao_xd'        => new sfWidgetFormDateTime(),
      'vl_docdesp_xd'        => new sfWidgetFormInputText(),
      'vl_deducao_xd'        => new sfWidgetFormInputText(),
      'tp_docdesp_xd'        => new sfWidgetFormInputText(),
      'st_estornado_xd'      => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4)),
      'cd_conta_ctx'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_banco_cb'          => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_cb'        => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_corrente_cb' => new sfValidatorString(array('max_length' => 10)),
      'nu_docdesp_xd'        => new sfValidatorString(array('max_length' => 20)),
      'dt_ref_xd'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_doc_caixa_xd'      => new sfValidatorString(array('max_length' => 8)),
      'dt_emissao_xd'        => new sfValidatorDateTime(),
      'vl_docdesp_xd'        => new sfValidatorNumber(),
      'vl_deducao_xd'        => new sfValidatorNumber(),
      'tp_docdesp_xd'        => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'st_estornado_xd'      => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrcDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('despesas_extra_orc_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DespesasExtraOrcDel';
  }


}
