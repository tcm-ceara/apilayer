<?php

/**
 * SubsidiosAutoridades form base class.
 *
 * @method SubsidiosAutoridades getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSubsidiosAutoridadesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'            => new sfWidgetFormInputHidden(),
      'tp_autoridade_sa'         => new sfWidgetFormInputHidden(),
      'dt_compet_sa'             => new sfWidgetFormInputHidden(),
      'dt_emissao_sub_sa'        => new sfWidgetFormDateTime(),
      'dt_ref_sa'                => new sfWidgetFormInputText(),
      'vl_total_sub_sa'          => new sfWidgetFormInputText(),
      'vl_diarias_sa'            => new sfWidgetFormInputText(),
      'vl_ajuda_custo_sa'        => new sfWidgetFormInputText(),
      'vl_outras_naturezas_sa'   => new sfWidgetFormInputText(),
      'vl_ded_contrib_partid_sa' => new sfWidgetFormInputText(),
      'vl_ded_pensao_aliment_sa' => new sfWidgetFormInputText(),
      'vl_ded_irrf_sa'           => new sfWidgetFormInputText(),
      'vl_ded_prev_sa'           => new sfWidgetFormInputText(),
      'vl_tot_outras_ded_sa'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'            => new sfValidatorPropelChoice(array('model' => 'SubsidiosAutoridades', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'tp_autoridade_sa'         => new sfValidatorPropelChoice(array('model' => 'SubsidiosAutoridades', 'column' => 'tp_autoridade_sa', 'required' => false)),
      'dt_compet_sa'             => new sfValidatorPropelChoice(array('model' => 'SubsidiosAutoridades', 'column' => 'dt_compet_sa', 'required' => false)),
      'dt_emissao_sub_sa'        => new sfValidatorDateTime(),
      'dt_ref_sa'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_total_sub_sa'          => new sfValidatorNumber(),
      'vl_diarias_sa'            => new sfValidatorNumber(),
      'vl_ajuda_custo_sa'        => new sfValidatorNumber(),
      'vl_outras_naturezas_sa'   => new sfValidatorNumber(),
      'vl_ded_contrib_partid_sa' => new sfValidatorNumber(),
      'vl_ded_pensao_aliment_sa' => new sfValidatorNumber(),
      'vl_ded_irrf_sa'           => new sfValidatorNumber(),
      'vl_ded_prev_sa'           => new sfValidatorNumber(),
      'vl_tot_outras_ded_sa'     => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('subsidios_autoridades[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SubsidiosAutoridades';
  }


}
