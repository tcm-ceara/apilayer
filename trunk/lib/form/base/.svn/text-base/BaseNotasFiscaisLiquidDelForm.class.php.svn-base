<?php

/**
 * NotasFiscaisLiquidDel form base class.
 *
 * @method NotasFiscaisLiquidDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasFiscaisLiquidDelForm extends BaseFormPropel
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
      'tp_nf_liq'              => new sfWidgetFormInputText(),
      'nu_nf_liq'              => new sfWidgetFormInputText(),
      'dt_ref_nf_liq'          => new sfWidgetFormInputText(),
      'nu_serie_trans_nf_liq'  => new sfWidgetFormInputText(),
      'nu_selo_trans_nf_liq'   => new sfWidgetFormInputText(),
      'nu_serie_nf_liq'        => new sfWidgetFormInputText(),
      'nu_cgf_emitente_nf_liq' => new sfWidgetFormInputText(),
      'cd_uf_emitente_nf_liq'  => new sfWidgetFormInputText(),
      'dt_emissao_nf_liq'      => new sfWidgetFormDateTime(),
      'dt_liquid_nf_liq'       => new sfWidgetFormDateTime(),
      'nm_resp_liquid_nf_liq'  => new sfWidgetFormInputText(),
      'vl_nf_liq'              => new sfWidgetFormInputText(),
      'nu_sub_empenho_nf_liq'  => new sfWidgetFormInputText(),
      'nu_formulario_nf_liq'   => new sfWidgetFormInputText(),
      'dt_limite_nf_liq'       => new sfWidgetFormDateTime(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'          => new sfValidatorDateTime(),
      'nu_nota_empenho'        => new sfValidatorString(array('max_length' => 8)),
      'tp_nf_liq'              => new sfValidatorString(array('max_length' => 1)),
      'nu_nf_liq'              => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_nf_liq'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nu_serie_trans_nf_liq'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nu_selo_trans_nf_liq'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_serie_nf_liq'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_cgf_emitente_nf_liq' => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'cd_uf_emitente_nf_liq'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'dt_emissao_nf_liq'      => new sfValidatorDateTime(array('required' => false)),
      'dt_liquid_nf_liq'       => new sfValidatorDateTime(array('required' => false)),
      'nm_resp_liquid_nf_liq'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'vl_nf_liq'              => new sfValidatorNumber(array('required' => false)),
      'nu_sub_empenho_nf_liq'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nu_formulario_nf_liq'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dt_limite_nf_liq'       => new sfValidatorDateTime(array('required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquidDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_fiscais_liquid_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasFiscaisLiquidDel';
  }


}
