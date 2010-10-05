<?php

/**
 * BalDespOrcT form base class.
 *
 * @method BalDespOrcT getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalDespOrcTForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'                 => new sfWidgetFormInputText(),
      'dt_versao_orc'                => new sfWidgetFormInputText(),
      'cd_orgao'                     => new sfWidgetFormInputText(),
      'cd_unid_orc'                  => new sfWidgetFormInputText(),
      'cd_funcao'                    => new sfWidgetFormInputText(),
      'cd_subfuncao'                 => new sfWidgetFormInputText(),
      'cd_programa'                  => new sfWidgetFormInputText(),
      'cd_proj_ativ'                 => new sfWidgetFormInputText(),
      'nu_proj_ativ'                 => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ'             => new sfWidgetFormInputText(),
      'cd_elemento_od'               => new sfWidgetFormInputText(),
      'dt_ref_bd'                    => new sfWidgetFormInputText(),
      'tp_balancete_bd'              => new sfWidgetFormInputText(),
      'vl_fixado_orcamento_bd'       => new sfWidgetFormInputText(),
      'vl_supl_no_mes_bd'            => new sfWidgetFormInputText(),
      'vl_supl_ate_mes_bd'           => new sfWidgetFormInputText(),
      'vl_anulacoes_no_mes_bd'       => new sfWidgetFormInputText(),
      'vl_empenhado_no_mes_bd'       => new sfWidgetFormInputText(),
      'vl_empenhado_ate_mes_bd'      => new sfWidgetFormInputText(),
      'vl_saldo_dotacao_bd'          => new sfWidgetFormInputText(),
      'vl_pago_no_mes_bd'            => new sfWidgetFormInputText(),
      'vl_pago_ate_mes_bd'           => new sfWidgetFormInputText(),
      'vl_empenhado_a_pagar_bd'      => new sfWidgetFormInputText(),
      'vl_anulacoes_ate_mes_bd'      => new sfWidgetFormInputText(),
      'vl_anulacoes_emp_no_mes_bd'   => new sfWidgetFormInputText(),
      'vl_anulacoes_emp_ate_mes_bd'  => new sfWidgetFormInputText(),
      'vl_liquid_no_mes_bd'          => new sfWidgetFormInputText(),
      'vl_liquid_no_ate_bd'          => new sfWidgetFormInputText(),
      'vl_estornos_liquid_no_mes_bd' => new sfWidgetFormInputText(),
      'vl_estornos_liquid_no_ate_bd' => new sfWidgetFormInputText(),
      'vl_estornos_pagos_no_mes_bd'  => new sfWidgetFormInputText(),
      'vl_estornos_pagos_no_ate_bd'  => new sfWidgetFormInputText(),
      'vl_realocado_orig_no_mes_bd'  => new sfWidgetFormInputText(),
      'vl_realocado_orig_ate_mes_bd' => new sfWidgetFormInputText(),
      'vl_realocado_dest_no_mes_bd'  => new sfWidgetFormInputText(),
      'vl_realocado_dest_ate_mes_bd' => new sfWidgetFormInputText(),
      'id'                           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'                 => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                     => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'                  => new sfValidatorString(array('max_length' => 4)),
      'cd_funcao'                    => new sfValidatorString(array('max_length' => 2)),
      'cd_subfuncao'                 => new sfValidatorString(array('max_length' => 3)),
      'cd_programa'                  => new sfValidatorString(array('max_length' => 4)),
      'cd_proj_ativ'                 => new sfValidatorString(array('max_length' => 1)),
      'nu_proj_ativ'                 => new sfValidatorString(array('max_length' => 3)),
      'nu_sub_proj_ativ'             => new sfValidatorString(array('max_length' => 4)),
      'cd_elemento_od'               => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_bd'                    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_balancete_bd'              => new sfValidatorString(array('max_length' => 1)),
      'vl_fixado_orcamento_bd'       => new sfValidatorNumber(array('required' => false)),
      'vl_supl_no_mes_bd'            => new sfValidatorNumber(array('required' => false)),
      'vl_supl_ate_mes_bd'           => new sfValidatorNumber(array('required' => false)),
      'vl_anulacoes_no_mes_bd'       => new sfValidatorNumber(array('required' => false)),
      'vl_empenhado_no_mes_bd'       => new sfValidatorNumber(array('required' => false)),
      'vl_empenhado_ate_mes_bd'      => new sfValidatorNumber(array('required' => false)),
      'vl_saldo_dotacao_bd'          => new sfValidatorNumber(array('required' => false)),
      'vl_pago_no_mes_bd'            => new sfValidatorNumber(array('required' => false)),
      'vl_pago_ate_mes_bd'           => new sfValidatorNumber(array('required' => false)),
      'vl_empenhado_a_pagar_bd'      => new sfValidatorNumber(array('required' => false)),
      'vl_anulacoes_ate_mes_bd'      => new sfValidatorNumber(array('required' => false)),
      'vl_anulacoes_emp_no_mes_bd'   => new sfValidatorNumber(array('required' => false)),
      'vl_anulacoes_emp_ate_mes_bd'  => new sfValidatorNumber(array('required' => false)),
      'vl_liquid_no_mes_bd'          => new sfValidatorNumber(array('required' => false)),
      'vl_liquid_no_ate_bd'          => new sfValidatorNumber(array('required' => false)),
      'vl_estornos_liquid_no_mes_bd' => new sfValidatorNumber(array('required' => false)),
      'vl_estornos_liquid_no_ate_bd' => new sfValidatorNumber(array('required' => false)),
      'vl_estornos_pagos_no_mes_bd'  => new sfValidatorNumber(array('required' => false)),
      'vl_estornos_pagos_no_ate_bd'  => new sfValidatorNumber(array('required' => false)),
      'vl_realocado_orig_no_mes_bd'  => new sfValidatorNumber(array('required' => false)),
      'vl_realocado_orig_ate_mes_bd' => new sfValidatorNumber(array('required' => false)),
      'vl_realocado_dest_no_mes_bd'  => new sfValidatorNumber(array('required' => false)),
      'vl_realocado_dest_ate_mes_bd' => new sfValidatorNumber(array('required' => false)),
      'id'                           => new sfValidatorPropelChoice(array('model' => 'BalDespOrcT', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_desp_orc_t[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalDespOrcT';
  }


}
