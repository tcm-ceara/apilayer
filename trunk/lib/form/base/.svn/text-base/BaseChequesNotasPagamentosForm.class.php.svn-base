<?php

/**
 * ChequesNotasPagamentos form base class.
 *
 * @method ChequesNotasPagamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseChequesNotasPagamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'cd_orgao'                => new sfWidgetFormInputHidden(),
      'cd_unid_orc'             => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'           => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'         => new sfWidgetFormInputHidden(),
      'nu_sub_empenho_np'       => new sfWidgetFormInputHidden(),
      'nu_nota_np'              => new sfWidgetFormInputHidden(),
      'nu_banco_cnp'            => new sfWidgetFormInputHidden(),
      'nu_agencia_bancaria_cnp' => new sfWidgetFormInputHidden(),
      'nu_conta_bancaria_cnp'   => new sfWidgetFormInputHidden(),
      'nu_cheque_cnp'           => new sfWidgetFormInputHidden(),
      'dt_ref_cnp'              => new sfWidgetFormInputText(),
      'dt_emissao_cnp'          => new sfWidgetFormDateTime(),
      'vl_cheque_cnp'           => new sfWidgetFormInputText(),
      'tp_docbanc_cnp'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'ChequesNotasPagamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'           => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'         => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_sub_empenho_np'       => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_sub_empenho_np', 'required' => false)),
      'nu_nota_np'              => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_np', 'required' => false)),
      'nu_banco_cnp'            => new sfValidatorPropelChoice(array('model' => 'ChequesNotasPagamentos', 'column' => 'nu_banco_cnp', 'required' => false)),
      'nu_agencia_bancaria_cnp' => new sfValidatorPropelChoice(array('model' => 'ChequesNotasPagamentos', 'column' => 'nu_agencia_bancaria_cnp', 'required' => false)),
      'nu_conta_bancaria_cnp'   => new sfValidatorPropelChoice(array('model' => 'ChequesNotasPagamentos', 'column' => 'nu_conta_bancaria_cnp', 'required' => false)),
      'nu_cheque_cnp'           => new sfValidatorPropelChoice(array('model' => 'ChequesNotasPagamentos', 'column' => 'nu_cheque_cnp', 'required' => false)),
      'dt_ref_cnp'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'dt_emissao_cnp'          => new sfValidatorDateTime(array('required' => false)),
      'vl_cheque_cnp'           => new sfValidatorNumber(array('required' => false)),
      'tp_docbanc_cnp'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cheques_notas_pagamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChequesNotasPagamentos';
  }


}
