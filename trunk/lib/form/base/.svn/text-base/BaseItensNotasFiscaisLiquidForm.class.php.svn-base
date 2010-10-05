<?php

/**
 * ItensNotasFiscaisLiquid form base class.
 *
 * @method ItensNotasFiscaisLiquid getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensNotasFiscaisLiquidForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputHidden(),
      'dt_versao_orc'        => new sfWidgetFormInputHidden(),
      'cd_orgao'             => new sfWidgetFormInputHidden(),
      'cd_unid_orc'          => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'        => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'      => new sfWidgetFormInputHidden(),
      'tp_nf_liq'            => new sfWidgetFormInputHidden(),
      'nu_nf_liq'            => new sfWidgetFormInputHidden(),
      'nu_item_seq_in'       => new sfWidgetFormInputHidden(),
      'de_item_in1'          => new sfWidgetFormInputText(),
      'de_item_in2'          => new sfWidgetFormInputText(),
      'de_unid_compra_in'    => new sfWidgetFormInputText(),
      'nu_quant_comprada_in' => new sfWidgetFormInputText(),
      'vl_unit_item_in'      => new sfWidgetFormInputText(),
      'vl_total_item_in'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'ItensNotasFiscaisLiquid', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'        => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'      => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'nu_nota_empenho', 'required' => false)),
      'tp_nf_liq'            => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'tp_nf_liq', 'required' => false)),
      'nu_nf_liq'            => new sfValidatorPropelChoice(array('model' => 'NotasFiscaisLiquid', 'column' => 'nu_nf_liq', 'required' => false)),
      'nu_item_seq_in'       => new sfValidatorPropelChoice(array('model' => 'ItensNotasFiscaisLiquid', 'column' => 'nu_item_seq_in', 'required' => false)),
      'de_item_in1'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_item_in2'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_unid_compra_in'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_quant_comprada_in' => new sfValidatorNumber(array('required' => false)),
      'vl_unit_item_in'      => new sfValidatorNumber(array('required' => false)),
      'vl_total_item_in'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itens_notas_fiscais_liquid[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensNotasFiscaisLiquid';
  }


}
