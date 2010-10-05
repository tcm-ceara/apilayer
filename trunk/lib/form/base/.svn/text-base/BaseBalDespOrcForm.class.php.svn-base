<?php

/**
 * BalDespOrc form base class.
 *
 * @method BalDespOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalDespOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'                 => new sfWidgetFormInputHidden(),
      'dt_versao_orc'                => new sfWidgetFormInputHidden(),
      'cd_orgao'                     => new sfWidgetFormInputHidden(),
      'cd_unid_orc'                  => new sfWidgetFormInputHidden(),
      'cd_funcao'                    => new sfWidgetFormInputHidden(),
      'cd_subfuncao'                 => new sfWidgetFormInputHidden(),
      'cd_programa'                  => new sfWidgetFormInputHidden(),
      'cd_proj_ativ'                 => new sfWidgetFormInputHidden(),
      'nu_proj_ativ'                 => new sfWidgetFormInputHidden(),
      'nu_sub_proj_ativ'             => new sfWidgetFormInputHidden(),
      'cd_elemento_od'               => new sfWidgetFormInputHidden(),
      'dt_ref_bd'                    => new sfWidgetFormInputHidden(),
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
    ));

    $this->setValidators(array(
      'cd_municipio'                 => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'                => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'                  => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao'                    => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao'                 => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa'                  => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ'                 => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ'                 => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ'             => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_elemento_od'               => new sfValidatorPropelChoice(array('model' => 'BalDespOrc', 'column' => 'cd_elemento_od', 'required' => false)),
      'dt_ref_bd'                    => new sfValidatorPropelChoice(array('model' => 'BalDespOrc', 'column' => 'dt_ref_bd', 'required' => false)),
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
    ));

    $this->widgetSchema->setNameFormat('bal_desp_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalDespOrc';
  }


}
