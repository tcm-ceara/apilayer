<?php

/**
 * NotasFiscais form base class.
 *
 * @method NotasFiscais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasFiscaisForm extends BaseFormPropel
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
      'dt_liquid_liq'          => new sfWidgetFormInputHidden(),
      'tp_nf'                  => new sfWidgetFormInputHidden(),
      'nu_nf'                  => new sfWidgetFormInputHidden(),
      'dt_ref_nf'              => new sfWidgetFormInputText(),
      'nu_serie_trans_nf'      => new sfWidgetFormInputText(),
      'nu_selo_trans_nf'       => new sfWidgetFormInputText(),
      'nu_serie_nf'            => new sfWidgetFormInputText(),
      'nu_formulario_nf'       => new sfWidgetFormInputText(),
      'dt_limite_nf'           => new sfWidgetFormDateTime(),
      'nu_cgf_emitente_nf'     => new sfWidgetFormInputText(),
      'cd_uf_emitente_nf'      => new sfWidgetFormPropelChoice(array('model' => 'UnidadesFederacao', 'add_empty' => false)),
      'dt_emissao_nf'          => new sfWidgetFormDateTime(),
      'vl_liq_nf'              => new sfWidgetFormInputText(),
      'vl_desc_nf'             => new sfWidgetFormInputText(),
      'vl_bruto_nf'            => new sfWidgetFormInputText(),
      'vl_aliquota_iss_nf'     => new sfWidgetFormInputText(),
      'vl_basecalc_iss_nf'     => new sfWidgetFormInputText(),
      'tp_emissao_nf'          => new sfWidgetFormInputText(),
      'nu_protoc_auten_nfe_nf' => new sfWidgetFormInputText(),
      'nu_chave_acesso_nfe_nf' => new sfWidgetFormInputText(),
      'cd_verifica_nfe_fpn_nf' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'          => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'        => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_liquid_liq'          => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_liquid_liq', 'required' => false)),
      'tp_nf'                  => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'tp_nf', 'required' => false)),
      'nu_nf'                  => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'nu_nf', 'required' => false)),
      'dt_ref_nf'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_serie_trans_nf'      => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nu_selo_trans_nf'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_serie_nf'            => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_formulario_nf'       => new sfValidatorString(array('max_length' => 255)),
      'dt_limite_nf'           => new sfValidatorDateTime(array('required' => false)),
      'nu_cgf_emitente_nf'     => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'cd_uf_emitente_nf'      => new sfValidatorPropelChoice(array('model' => 'UnidadesFederacao', 'column' => 'cd_sigla_uf')),
      'dt_emissao_nf'          => new sfValidatorDateTime(),
      'vl_liq_nf'              => new sfValidatorNumber(),
      'vl_desc_nf'             => new sfValidatorNumber(),
      'vl_bruto_nf'            => new sfValidatorNumber(),
      'vl_aliquota_iss_nf'     => new sfValidatorNumber(array('required' => false)),
      'vl_basecalc_iss_nf'     => new sfValidatorNumber(array('required' => false)),
      'tp_emissao_nf'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'nu_protoc_auten_nfe_nf' => new sfValidatorNumber(array('required' => false)),
      'nu_chave_acesso_nfe_nf' => new sfValidatorString(array('max_length' => 44, 'required' => false)),
      'cd_verifica_nfe_fpn_nf' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_fiscais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasFiscais';
  }


}
