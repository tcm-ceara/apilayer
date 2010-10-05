<?php

/**
 * SubsidiosVereadoresDel form base class.
 *
 * @method SubsidiosVereadoresDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSubsidiosVereadoresDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputText(),
      'nu_cpf_vereador'          => new sfWidgetFormInputText(),
      'dt_ini_mandato_ve'        => new sfWidgetFormDateTime(),
      'dt_compet_sv'             => new sfWidgetFormInputText(),
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
      'id'                       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorString(array('max_length' => 3)),
      'nu_cpf_vereador'          => new sfValidatorString(array('max_length' => 11)),
      'dt_ini_mandato_ve'        => new sfValidatorDateTime(),
      'dt_compet_sv'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_emissao_subsidio_sv'   => new sfValidatorDateTime(),
      'dt_ref_sv'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_parte_fixa_sv'         => new sfValidatorNumber(),
      'vl_parte_variavel_sv'     => new sfValidatorNumber(),
      'vl_representacao_sv'      => new sfValidatorNumber(),
      'vl_outras_naturezas_sv'   => new sfValidatorNumber(),
      'st_presidente_sv'         => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'vl_total_sub_sv'          => new sfValidatorNumber(),
      'vl_diarias_sv'            => new sfValidatorNumber(),
      'vl_ajuda_custo_sv'        => new sfValidatorNumber(),
      'vl_sessoes_extras_sv'     => new sfValidatorNumber(),
      'vl_ded_contrib_partid_sv' => new sfValidatorNumber(),
      'vl_ded_faltas_sv'         => new sfValidatorNumber(),
      'vl_ded_pensao_aliment_sv' => new sfValidatorNumber(),
      'vl_ded_irrf_sv'           => new sfValidatorNumber(),
      'vl_ded_prev_sv'           => new sfValidatorNumber(),
      'vl_tot_outras_ded_sv'     => new sfValidatorNumber(),
      'id'                       => new sfValidatorPropelChoice(array('model' => 'SubsidiosVereadoresDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subsidios_vereadores_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SubsidiosVereadoresDel';
  }


}
