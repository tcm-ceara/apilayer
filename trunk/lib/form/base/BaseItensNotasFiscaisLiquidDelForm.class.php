<?php

/**
 * ItensNotasFiscaisLiquidDel form base class.
 *
 * @method ItensNotasFiscaisLiquidDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensNotasFiscaisLiquidDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'dt_emissao_ne'        => new sfWidgetFormDateTime(),
      'nu_nota_empenho'      => new sfWidgetFormInputText(),
      'tp_nf_liq'            => new sfWidgetFormInputText(),
      'nu_nf_liq'            => new sfWidgetFormInputText(),
      'nu_item_seq_in'       => new sfWidgetFormInputText(),
      'de_item_in1'          => new sfWidgetFormInputText(),
      'de_item_in2'          => new sfWidgetFormInputText(),
      'de_unid_compra_in'    => new sfWidgetFormInputText(),
      'nu_quant_comprada_in' => new sfWidgetFormInputText(),
      'vl_unit_item_in'      => new sfWidgetFormInputText(),
      'vl_total_item_in'     => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'        => new sfValidatorDateTime(),
      'nu_nota_empenho'      => new sfValidatorString(array('max_length' => 8)),
      'tp_nf_liq'            => new sfValidatorString(array('max_length' => 1)),
      'nu_nf_liq'            => new sfValidatorString(array('max_length' => 8)),
      'nu_item_seq_in'       => new sfValidatorString(array('max_length' => 3)),
      'de_item_in1'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_item_in2'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_unid_compra_in'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_quant_comprada_in' => new sfValidatorNumber(array('required' => false)),
      'vl_unit_item_in'      => new sfValidatorNumber(array('required' => false)),
      'vl_total_item_in'     => new sfValidatorNumber(array('required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'ItensNotasFiscaisLiquidDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itens_notas_fiscais_liquid_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensNotasFiscaisLiquidDel';
  }


}
