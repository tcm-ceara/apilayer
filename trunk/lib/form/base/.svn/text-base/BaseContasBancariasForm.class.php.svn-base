<?php

/**
 * ContasBancarias form base class.
 *
 * @method ContasBancarias getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContasBancariasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputHidden(),
      'dt_versao_orc'        => new sfWidgetFormInputHidden(),
      'cd_orgao'             => new sfWidgetFormInputHidden(),
      'cd_unid_orc'          => new sfWidgetFormInputHidden(),
      'nu_banco_cb'          => new sfWidgetFormInputHidden(),
      'nu_agencia_cb'        => new sfWidgetFormInputHidden(),
      'nu_conta_corrente_cb' => new sfWidgetFormInputHidden(),
      'dt_abertura_cb'       => new sfWidgetFormDateTime(),
      'vl_saldo_abertura_cb' => new sfWidgetFormInputText(),
      'dt_ref_cb'            => new sfWidgetFormInputText(),
      'tp_conta_corrente_cb' => new sfWidgetFormInputText(),
      'cd_funcao'            => new sfWidgetFormInputText(),
      'de_objeto_vinculo_cb' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'nu_banco_cb'          => new sfValidatorPropelChoice(array('model' => 'ContasBancarias', 'column' => 'nu_banco_cb', 'required' => false)),
      'nu_agencia_cb'        => new sfValidatorPropelChoice(array('model' => 'ContasBancarias', 'column' => 'nu_agencia_cb', 'required' => false)),
      'nu_conta_corrente_cb' => new sfValidatorPropelChoice(array('model' => 'ContasBancarias', 'column' => 'nu_conta_corrente_cb', 'required' => false)),
      'dt_abertura_cb'       => new sfValidatorDateTime(),
      'vl_saldo_abertura_cb' => new sfValidatorNumber(),
      'dt_ref_cb'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tp_conta_corrente_cb' => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'cd_funcao'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'de_objeto_vinculo_cb' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contas_bancarias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContasBancarias';
  }


}
