<?php

/**
 * ContasBancariasDel form base class.
 *
 * @method ContasBancariasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContasBancariasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'nu_banco_cb'          => new sfWidgetFormInputText(),
      'nu_agencia_cb'        => new sfWidgetFormInputText(),
      'nu_conta_corrente_cb' => new sfWidgetFormInputText(),
      'dt_abertura_cb'       => new sfWidgetFormDateTime(),
      'vl_saldo_abertura_cb' => new sfWidgetFormInputText(),
      'dt_ref_cb'            => new sfWidgetFormInputText(),
      'tp_conta_corrente_cb' => new sfWidgetFormInputText(),
      'cd_funcao'            => new sfWidgetFormInputText(),
      'de_objeto_vinculo_cb' => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4)),
      'nu_banco_cb'          => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_cb'        => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_corrente_cb' => new sfValidatorString(array('max_length' => 10)),
      'dt_abertura_cb'       => new sfValidatorDateTime(),
      'vl_saldo_abertura_cb' => new sfValidatorNumber(),
      'dt_ref_cb'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tp_conta_corrente_cb' => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'cd_funcao'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'de_objeto_vinculo_cb' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'ContasBancariasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contas_bancarias_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContasBancariasDel';
  }


}
