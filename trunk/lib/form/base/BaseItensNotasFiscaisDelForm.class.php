<?php

/**
 * ItensNotasFiscaisDel form base class.
 *
 * @method ItensNotasFiscaisDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensNotasFiscaisDelForm extends BaseFormPropel
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
      'dt_liquid_liq'        => new sfWidgetFormDateTime(),
      'tp_nf'                => new sfWidgetFormInputText(),
      'nu_nf'                => new sfWidgetFormInputText(),
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
      'dt_liquid_liq'        => new sfValidatorDateTime(),
      'tp_nf'                => new sfValidatorString(array('max_length' => 1)),
      'nu_nf'                => new sfValidatorString(array('max_length' => 8)),
      'nu_item_seq_in'       => new sfValidatorString(array('max_length' => 3)),
      'de_item_in1'          => new sfValidatorString(array('max_length' => 255)),
      'de_item_in2'          => new sfValidatorString(array('max_length' => 255)),
      'de_unid_compra_in'    => new sfValidatorString(array('max_length' => 10)),
      'nu_quant_comprada_in' => new sfValidatorNumber(),
      'vl_unit_item_in'      => new sfValidatorNumber(),
      'vl_total_item_in'     => new sfValidatorNumber(),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'ItensNotasFiscaisDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itens_notas_fiscais_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensNotasFiscaisDel';
  }


}
