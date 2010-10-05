<?php

/**
 * ItensNotasFiscais form base class.
 *
 * @method ItensNotasFiscais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensNotasFiscaisForm extends BaseFormPropel
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
      'dt_liquid_liq'        => new sfWidgetFormInputHidden(),
      'tp_nf'                => new sfWidgetFormInputHidden(),
      'nu_nf'                => new sfWidgetFormInputHidden(),
      'nu_item_seq_in'       => new sfWidgetFormInputHidden(),
      'de_item_in1'          => new sfWidgetFormInputText(),
      'de_item_in2'          => new sfWidgetFormInputText(),
      'de_unid_compra_in'    => new sfWidgetFormInputText(),
      'nu_quant_comprada_in' => new sfWidgetFormInputText(),
      'vl_unit_item_in'      => new sfWidgetFormInputText(),
      'vl_total_item_in'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'ItensNotasFiscais', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'        => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'      => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_liquid_liq'        => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'dt_liquid_liq', 'required' => false)),
      'tp_nf'                => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'tp_nf', 'required' => false)),
      'nu_nf'                => new sfValidatorPropelChoice(array('model' => 'NotasFiscais', 'column' => 'nu_nf', 'required' => false)),
      'nu_item_seq_in'       => new sfValidatorPropelChoice(array('model' => 'ItensNotasFiscais', 'column' => 'nu_item_seq_in', 'required' => false)),
      'de_item_in1'          => new sfValidatorString(array('max_length' => 255)),
      'de_item_in2'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_unid_compra_in'    => new sfValidatorString(array('max_length' => 10)),
      'nu_quant_comprada_in' => new sfValidatorNumber(),
      'vl_unit_item_in'      => new sfValidatorNumber(),
      'vl_total_item_in'     => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('itens_notas_fiscais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensNotasFiscais';
  }


}
