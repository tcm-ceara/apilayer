<?php

/**
 * NotasFiscaisDel form base class.
 *
 * @method NotasFiscaisDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasFiscaisDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'dt_emissao_ne'          => new sfWidgetFormDateTime(),
      'nu_nota_empenho'        => new sfWidgetFormInputText(),
      'dt_liquid_liq'          => new sfWidgetFormDateTime(),
      'tp_nf'                  => new sfWidgetFormInputText(),
      'nu_nf'                  => new sfWidgetFormInputText(),
      'dt_ref_nf'              => new sfWidgetFormInputText(),
      'nu_serie_trans_nf'      => new sfWidgetFormInputText(),
      'nu_selo_trans_nf'       => new sfWidgetFormInputText(),
      'nu_serie_nf'            => new sfWidgetFormInputText(),
      'nu_formulario_nf'       => new sfWidgetFormInputText(),
      'dt_limite_nf'           => new sfWidgetFormDateTime(),
      'nu_cgf_emitente_nf'     => new sfWidgetFormInputText(),
      'cd_uf_emitente_nf'      => new sfWidgetFormInputText(),
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
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'          => new sfValidatorDateTime(),
      'nu_nota_empenho'        => new sfValidatorString(array('max_length' => 8)),
      'dt_liquid_liq'          => new sfValidatorDateTime(),
      'tp_nf'                  => new sfValidatorString(array('max_length' => 1)),
      'nu_nf'                  => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_nf'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_serie_trans_nf'      => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nu_selo_trans_nf'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_serie_nf'            => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_formulario_nf'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dt_limite_nf'           => new sfValidatorDateTime(array('required' => false)),
      'nu_cgf_emitente_nf'     => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'cd_uf_emitente_nf'      => new sfValidatorString(array('max_length' => 2)),
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
      'id'                     => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_fiscais_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasFiscaisDel';
  }


}
