<?php

/**
 * SubsidiosVereadores form base class.
 *
 * @method SubsidiosVereadores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSubsidiosVereadoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputHidden(),
      'nu_cpf_vereador'          => new sfWidgetFormInputHidden(),
      'dt_ini_mandato_ve'        => new sfWidgetFormInputHidden(),
      'dt_compet_sv'             => new sfWidgetFormInputHidden(),
      'dt_emissao_subsidio_sv'   => new sfWidgetFormDateTime(),
      'dt_ref_sv'                => new sfWidgetFormInputText(),
      'vl_parte_fixa_sv'         => new sfWidgetFormInputText(),
      'vl_parte_variavel_sv'     => new sfWidgetFormInputText(),
      'vl_representacao_sv'      => new sfWidgetFormInputText(),
      'vl_outras_naturezas_sv'   => new sfWidgetFormInputText(),
      'st_presidente_sv'         => new sfWidgetFormInputText(),
      'vl_total_sub_sv'          => new sfWidgetFormInputText(),
      'vl_diarias_sv'            => new sfWidgetFormInputText(),
      'vl_ajuda_custo_sv'        => new sfWidgetFormInputText(),
      'vl_sessoes_extras_sv'     => new sfWidgetFormInputText(),
      'vl_ded_contrib_partid_sv' => new sfWidgetFormInputText(),
      'vl_ded_faltas_sv'         => new sfWidgetFormInputText(),
      'vl_ded_pensao_aliment_sv' => new sfWidgetFormInputText(),
      'vl_ded_irrf_sv'           => new sfWidgetFormInputText(),
      'vl_ded_prev_sv'           => new sfWidgetFormInputText(),
      'vl_tot_outras_ded_sv'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorPropelChoice(array('model' => 'SubsidiosVereadores', 'column' => 'cd_municipio', 'required' => false)),
      'nu_cpf_vereador'          => new sfValidatorPropelChoice(array('model' => 'Vereadores', 'column' => 'nu_cpf_vereador', 'required' => false)),
      'dt_ini_mandato_ve'        => new sfValidatorPropelChoice(array('model' => 'Vereadores', 'column' => 'dt_ini_mandato_ve', 'required' => false)),
      'dt_compet_sv'             => new sfValidatorPropelChoice(array('model' => 'SubsidiosVereadores', 'column' => 'dt_compet_sv', 'required' => false)),
      'dt_emissao_subsidio_sv'   => new sfValidatorDateTime(array('required' => false)),
      'dt_ref_sv'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'vl_parte_fixa_sv'         => new sfValidatorNumber(array('required' => false)),
      'vl_parte_variavel_sv'     => new sfValidatorNumber(array('required' => false)),
      'vl_representacao_sv'      => new sfValidatorNumber(array('required' => false)),
      'vl_outras_naturezas_sv'   => new sfValidatorNumber(array('required' => false)),
      'st_presidente_sv'         => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'vl_total_sub_sv'          => new sfValidatorNumber(array('required' => false)),
      'vl_diarias_sv'            => new sfValidatorNumber(array('required' => false)),
      'vl_ajuda_custo_sv'        => new sfValidatorNumber(array('required' => false)),
      'vl_sessoes_extras_sv'     => new sfValidatorNumber(array('required' => false)),
      'vl_ded_contrib_partid_sv' => new sfValidatorNumber(array('required' => false)),
      'vl_ded_faltas_sv'         => new sfValidatorNumber(array('required' => false)),
      'vl_ded_pensao_aliment_sv' => new sfValidatorNumber(array('required' => false)),
      'vl_ded_irrf_sv'           => new sfValidatorNumber(array('required' => false)),
      'vl_ded_prev_sv'           => new sfValidatorNumber(array('required' => false)),
      'vl_tot_outras_ded_sv'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subsidios_vereadores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SubsidiosVereadores';
  }


}
