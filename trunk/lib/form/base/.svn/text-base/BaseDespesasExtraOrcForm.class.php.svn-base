<?php

/**
 * DespesasExtraOrc form base class.
 *
 * @method DespesasExtraOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDespesasExtraOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputHidden(),
      'dt_versao_orc'        => new sfWidgetFormInputHidden(),
      'cd_orgao'             => new sfWidgetFormInputHidden(),
      'cd_unid_orc'          => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'         => new sfWidgetFormInputHidden(),
      'nu_banco_cb'          => new sfWidgetFormInputHidden(),
      'nu_agencia_cb'        => new sfWidgetFormInputHidden(),
      'nu_conta_corrente_cb' => new sfWidgetFormInputHidden(),
      'nu_docdesp_xd'        => new sfWidgetFormInputHidden(),
      'dt_ref_xd'            => new sfWidgetFormInputText(),
      'nu_doc_caixa_xd'      => new sfWidgetFormInputText(),
      'dt_emissao_xd'        => new sfWidgetFormDateTime(),
      'vl_docdesp_xd'        => new sfWidgetFormInputText(),
      'vl_deducao_xd'        => new sfWidgetFormInputText(),
      'tp_docdesp_xd'        => new sfWidgetFormInputText(),
      'st_estornado_xd'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'         => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'nu_banco_cb'          => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_banco_cb', 'required' => false)),
      'nu_agencia_cb'        => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_agencia_cb', 'required' => false)),
      'nu_conta_corrente_cb' => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_conta_corrente_cb', 'required' => false)),
      'nu_docdesp_xd'        => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_docdesp_xd', 'required' => false)),
      'dt_ref_xd'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_doc_caixa_xd'      => new sfValidatorString(array('max_length' => 8)),
      'dt_emissao_xd'        => new sfValidatorDateTime(),
      'vl_docdesp_xd'        => new sfValidatorNumber(),
      'vl_deducao_xd'        => new sfValidatorNumber(),
      'tp_docdesp_xd'        => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'st_estornado_xd'      => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
    ));

    $this->widgetSchema->setNameFormat('despesas_extra_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DespesasExtraOrc';
  }


}
