<?php

/**
 * NotasPagamentosDel form base class.
 *
 * @method NotasPagamentosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasPagamentosDelForm extends BaseFormPropel
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
      'nu_sub_empenho_np'  => new sfWidgetFormInputText(),
      'nu_nota_np'         => new sfWidgetFormInputText(),
      'dt_ref_np'          => new sfWidgetFormInputText(),
      'nu_doc_caixa_np'    => new sfWidgetFormInputText(),
      'dt_nota_np'         => new sfWidgetFormDateTime(),
      'vl_nota_np'         => new sfWidgetFormInputText(),
      'vl_emp_a_pagar_np'  => new sfWidgetFormInputText(),
      'st_estornado_np'    => new sfWidgetFormInputText(),
      'cd_cpf_resp_pag_np' => new sfWidgetFormInputText(),
      'nm_resp_pag_np'     => new sfWidgetFormInputText(),
      'id'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'           => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'        => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'      => new sfValidatorDateTime(),
      'nu_nota_empenho'    => new sfValidatorString(array('max_length' => 8)),
      'nu_sub_empenho_np'  => new sfValidatorString(array('max_length' => 3)),
      'nu_nota_np'         => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_np'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_doc_caixa_np'    => new sfValidatorString(array('max_length' => 8)),
      'dt_nota_np'         => new sfValidatorDateTime(),
      'vl_nota_np'         => new sfValidatorNumber(),
      'vl_emp_a_pagar_np'  => new sfValidatorNumber(),
      'st_estornado_np'    => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_cpf_resp_pag_np' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_resp_pag_np'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'NotasPagamentosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_pagamentos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasPagamentosDel';
  }


}
