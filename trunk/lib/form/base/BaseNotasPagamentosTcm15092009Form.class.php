<?php

/**
 * NotasPagamentosTcm15092009 form base class.
 *
 * @method NotasPagamentosTcm15092009 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasPagamentosTcm15092009Form extends BaseFormPropel
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
      'dt_ref_np'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nu_doc_caixa_np'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'dt_nota_np'         => new sfValidatorDateTime(array('required' => false)),
      'vl_nota_np'         => new sfValidatorNumber(array('required' => false)),
      'vl_emp_a_pagar_np'  => new sfValidatorNumber(array('required' => false)),
      'st_estornado_np'    => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'cd_cpf_resp_pag_np' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_resp_pag_np'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'NotasPagamentosTcm15092009', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_pagamentos_tcm15092009[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasPagamentosTcm15092009';
  }


}
