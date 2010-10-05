<?php

/**
 * NotasFiscaisLiquid form base class.
 *
 * @method NotasFiscaisLiquid getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasFiscaisLiquidForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'          => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'        => new sfWidgetFormInputHidden(),
      'tp_nf_liq'              => new sfWidgetFormInputHidden(),
      'nu_nf_liq'              => new sfWidgetFormInputHidden(),
      'dt_ref_nf_liq'          => new sfWidgetFormInputText(),
      'nu_serie_trans_nf_liq'  => new sfWidgetFormInputText(),
      'nu_selo_trans_nf_liq'   => new sfWidgetFormInputText(),
      'nu_serie_nf_liq'        => new sfWidgetFormInputText(),
      'nu_cgf_emitente_nf_liq' => new sfWidgetFormInputText(),
      'cd_uf_emitente_nf_liq'  => new sfWidgetFormPropelChoice(array('model' => 'UnidadesFederacao', 'add_empty' => true)),
      'dt_emissao_nf_liq'      => new sfWidgetFormDateTime(),
      'dt_liquid_nf_liq'       => new sfWidgetFormDateTime(),
      'nm_resp_liquid_nf_liq'  => new sfWidgetFormInputText(),
      'vl_nf_liq'              => new sfWidgetFormInputText(),
      'nu_sub_empenho_nf_liq'  => new sfWidgetFormInputText(),
      'nu_formulario_nf_liq'   => new sfWidgetFormInputText(),
      'dt_limite_nf_liq'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'tp_nf_liq'              => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'tp_nf_liq', 'required' => false)),
      'nu_nf_liq'              => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'nu_nf_liq', 'required' => false)),
      'dt_ref_nf_liq'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nu_serie_trans_nf_liq'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nu_selo_trans_nf_liq'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_serie_nf_liq'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_cgf_emitente_nf_liq' => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'cd_uf_emitente_nf_liq'  => new sfValidatorPropelChoice(array('model' => 'UnidadesFederacao', 'column' => 'cd_sigla_uf', 'required' => false)),
      'dt_emissao_nf_liq'      => new sfValidatorDateTime(array('required' => false)),
      'dt_liquid_nf_liq'       => new sfValidatorDateTime(array('required' => false)),
      'nm_resp_liquid_nf_liq'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'vl_nf_liq'              => new sfValidatorNumber(array('required' => false)),
      'nu_sub_empenho_nf_liq'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nu_formulario_nf_liq'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dt_limite_nf_liq'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_fiscais_liquid[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasFiscaisLiquid';
  }


}
