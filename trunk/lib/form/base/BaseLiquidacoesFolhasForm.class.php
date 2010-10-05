<?php

/**
 * LiquidacoesFolhas form base class.
 *
 * @method LiquidacoesFolhas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLiquidacoesFolhasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputHidden(),
      'dt_versao_orc'      => new sfWidgetFormInputHidden(),
      'cd_orgao'           => new sfWidgetFormInputHidden(),
      'cd_unid_orc'        => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'      => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'    => new sfWidgetFormInputHidden(),
      'dt_liquid_liq'      => new sfWidgetFormInputHidden(),
      'dt_compet_fl'       => new sfWidgetFormInputHidden(),
      'tp_folha'           => new sfWidgetFormInputHidden(),
      'dt_emissao_fl'      => new sfWidgetFormInputHidden(),
      'vl_liquid_folha_lf' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorPropelChoice(array('model' => 'LiquidacoesFolhas', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'      => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'           => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'        => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'      => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'    => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_liquid_liq'      => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_liquid_liq', 'required' => false)),
      'dt_compet_fl'       => new sfValidatorPropelChoice(array('model' => 'LiquidacoesFolhas', 'column' => 'dt_compet_fl', 'required' => false)),
      'tp_folha'           => new sfValidatorPropelChoice(array('model' => 'LiquidacoesFolhas', 'column' => 'tp_folha', 'required' => false)),
      'dt_emissao_fl'      => new sfValidatorPropelChoice(array('model' => 'LiquidacoesFolhas', 'column' => 'dt_emissao_fl', 'required' => false)),
      'vl_liquid_folha_lf' => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('liquidacoes_folhas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LiquidacoesFolhas';
  }


}
