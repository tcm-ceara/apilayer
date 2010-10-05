<?php

/**
 * ChequesNotasPagamentosDel form base class.
 *
 * @method ChequesNotasPagamentosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseChequesNotasPagamentosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputText(),
      'dt_versao_orc'           => new sfWidgetFormInputText(),
      'cd_orgao'                => new sfWidgetFormInputText(),
      'cd_unid_orc'             => new sfWidgetFormInputText(),
      'dt_emissao_ne'           => new sfWidgetFormDateTime(),
      'nu_nota_empenho'         => new sfWidgetFormInputText(),
      'nu_sub_empenho_np'       => new sfWidgetFormInputText(),
      'nu_nota_np'              => new sfWidgetFormInputText(),
      'nu_banco_cnp'            => new sfWidgetFormInputText(),
      'nu_agencia_bancaria_cnp' => new sfWidgetFormInputText(),
      'nu_conta_bancaria_cnp'   => new sfWidgetFormInputText(),
      'nu_cheque_cnp'           => new sfWidgetFormInputText(),
      'dt_ref_cnp'              => new sfWidgetFormInputText(),
      'dt_emissao_cnp'          => new sfWidgetFormDateTime(),
      'vl_cheque_cnp'           => new sfWidgetFormInputText(),
      'tp_docbanc_cnp'          => new sfWidgetFormInputText(),
      'id'                      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'             => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'           => new sfValidatorDateTime(),
      'nu_nota_empenho'         => new sfValidatorString(array('max_length' => 8)),
      'nu_sub_empenho_np'       => new sfValidatorString(array('max_length' => 3)),
      'nu_nota_np'              => new sfValidatorString(array('max_length' => 8)),
      'nu_banco_cnp'            => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_bancaria_cnp' => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_bancaria_cnp'   => new sfValidatorString(array('max_length' => 10)),
      'nu_cheque_cnp'           => new sfValidatorString(array('max_length' => 20)),
      'dt_ref_cnp'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_emissao_cnp'          => new sfValidatorDateTime(),
      'vl_cheque_cnp'           => new sfValidatorNumber(),
      'tp_docbanc_cnp'          => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'id'                      => new sfValidatorPropelChoice(array('model' => 'ChequesNotasPagamentosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cheques_notas_pagamentos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChequesNotasPagamentosDel';
  }


}
