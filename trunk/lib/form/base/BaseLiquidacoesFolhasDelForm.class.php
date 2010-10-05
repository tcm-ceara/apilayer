<?php

/**
 * LiquidacoesFolhasDel form base class.
 *
 * @method LiquidacoesFolhasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLiquidacoesFolhasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputText(),
      'dt_versao_orc'      => new sfWidgetFormInputText(),
      'cd_orgao'           => new sfWidgetFormInputText(),
      'cd_unid_orc'        => new sfWidgetFormInputText(),
      'dt_emissao_ne'      => new sfWidgetFormDateTime(),
      'nu_nota_empenho'    => new sfWidgetFormInputText(),
      'dt_liquid_liq'      => new sfWidgetFormDateTime(),
      'dt_compet_fl'       => new sfWidgetFormInputText(),
      'tp_folha'           => new sfWidgetFormInputText(),
      'dt_emissao_fl'      => new sfWidgetFormDateTime(),
      'vl_liquid_folha_lf' => new sfWidgetFormInputText(),
      'id'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'           => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'        => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'      => new sfValidatorDateTime(),
      'nu_nota_empenho'    => new sfValidatorString(array('max_length' => 8)),
      'dt_liquid_liq'      => new sfValidatorDateTime(),
      'dt_compet_fl'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_folha'           => new sfValidatorString(array('max_length' => 2)),
      'dt_emissao_fl'      => new sfValidatorDateTime(),
      'vl_liquid_folha_lf' => new sfValidatorNumber(),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'LiquidacoesFolhasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('liquidacoes_folhas_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LiquidacoesFolhasDel';
  }


}
