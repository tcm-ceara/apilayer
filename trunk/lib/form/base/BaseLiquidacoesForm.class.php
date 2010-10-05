<?php

/**
 * Liquidacoes form base class.
 *
 * @method Liquidacoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLiquidacoesForm extends BaseFormPropel
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
      'dt_ref_liq'             => new sfWidgetFormInputText(),
      'nm_resp_liquid_liq'     => new sfWidgetFormInputText(),
      'nu_sub_empenho_liq'     => new sfWidgetFormInputText(),
      'vl_liquid_liq'          => new sfWidgetFormInputText(),
      'st_estornado_liq'       => new sfWidgetFormInputCheckbox(),
      'st_folha_liq'           => new sfWidgetFormInputText(),
      'cd_cpf_resp_liquid_liq' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_liquid_liq'          => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_liquid_liq', 'required' => false)),
      'dt_ref_liq'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_resp_liquid_liq'     => new sfValidatorString(array('max_length' => 40)),
      'nu_sub_empenho_liq'     => new sfValidatorString(array('max_length' => 3)),
      'vl_liquid_liq'          => new sfValidatorNumber(),
      'st_estornado_liq'       => new sfValidatorBoolean(),
      'st_folha_liq'           => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'cd_cpf_resp_liquid_liq' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('liquidacoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Liquidacoes';
  }


}
