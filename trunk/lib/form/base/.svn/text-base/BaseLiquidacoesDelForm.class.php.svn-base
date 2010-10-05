<?php

/**
 * LiquidacoesDel form base class.
 *
 * @method LiquidacoesDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLiquidacoesDelForm extends BaseFormPropel
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
      'dt_ref_liq'             => new sfWidgetFormInputText(),
      'nm_resp_liquid_liq'     => new sfWidgetFormInputText(),
      'nu_sub_empenho_liq'     => new sfWidgetFormInputText(),
      'vl_liquid_liq'          => new sfWidgetFormInputText(),
      'st_estornado_liq'       => new sfWidgetFormInputCheckbox(),
      'st_folha_liq'           => new sfWidgetFormInputText(),
      'cd_cpf_resp_liquid_liq' => new sfWidgetFormInputText(),
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
      'dt_ref_liq'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_resp_liquid_liq'     => new sfValidatorString(array('max_length' => 40)),
      'nu_sub_empenho_liq'     => new sfValidatorString(array('max_length' => 3)),
      'vl_liquid_liq'          => new sfValidatorNumber(),
      'st_estornado_liq'       => new sfValidatorBoolean(),
      'st_folha_liq'           => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_cpf_resp_liquid_liq' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'LiquidacoesDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('liquidacoes_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LiquidacoesDel';
  }


}
