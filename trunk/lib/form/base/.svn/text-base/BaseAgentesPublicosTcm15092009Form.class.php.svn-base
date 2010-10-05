<?php

/**
 * AgentesPublicosTcm15092009 form base class.
 *
 * @method AgentesPublicosTcm15092009 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAgentesPublicosTcm15092009Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni'     => new sfWidgetFormInputText(),
      'cd_ingresso'          => new sfWidgetFormInputText(),
      'cd_vinculo'           => new sfWidgetFormInputText(),
      'nu_expediente_no'     => new sfWidgetFormInputText(),
      'cd_expediente'        => new sfWidgetFormInputText(),
      'dt_expediente_ap'     => new sfWidgetFormDateTime(),
      'cd_amparo_legal'      => new sfWidgetFormInputText(),
      'nu_amparo_legal_ap'   => new sfWidgetFormInputText(),
      'dt_amparo_legal_ap'   => new sfWidgetFormDateTime(),
      'dt_public_amparo_ap'  => new sfWidgetFormDateTime(),
      'dt_posse_ap'          => new sfWidgetFormDateTime(),
      'nu_matricula_muni_ap' => new sfWidgetFormInputText(),
      'cd_sit_funcional'     => new sfWidgetFormInputText(),
      'cd_regime_juridico'   => new sfWidgetFormInputText(),
      'cd_regime_prev_ap'    => new sfWidgetFormInputText(),
      'cd_ocup_cbo'          => new sfWidgetFormInputText(),
      'cd_tipo_cargo'        => new sfWidgetFormInputText(),
      'vl_carga_horaria'     => new sfWidgetFormInputText(),
      'nu_dependentes_ap'    => new sfWidgetFormInputText(),
      'dt_ref_ap'            => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'      => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4)),
      'cd_cpf_serv_muni'     => new sfValidatorString(array('max_length' => 11)),
      'cd_ingresso'          => new sfValidatorString(array('max_length' => 1)),
      'cd_vinculo'           => new sfValidatorString(array('max_length' => 1)),
      'nu_expediente_no'     => new sfValidatorString(array('max_length' => 10)),
      'cd_expediente'        => new sfValidatorString(array('max_length' => 1)),
      'dt_expediente_ap'     => new sfValidatorDateTime(),
      'cd_amparo_legal'      => new sfValidatorString(array('max_length' => 1)),
      'nu_amparo_legal_ap'   => new sfValidatorString(array('max_length' => 10)),
      'dt_amparo_legal_ap'   => new sfValidatorDateTime(),
      'dt_public_amparo_ap'  => new sfValidatorDateTime(),
      'dt_posse_ap'          => new sfValidatorDateTime(),
      'nu_matricula_muni_ap' => new sfValidatorString(array('max_length' => 15)),
      'cd_sit_funcional'     => new sfValidatorString(array('max_length' => 1)),
      'cd_regime_juridico'   => new sfValidatorString(array('max_length' => 1)),
      'cd_regime_prev_ap'    => new sfValidatorString(array('max_length' => 1)),
      'cd_ocup_cbo'          => new sfValidatorString(array('max_length' => 6)),
      'cd_tipo_cargo'        => new sfValidatorString(array('max_length' => 2)),
      'vl_carga_horaria'     => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'nu_dependentes_ap'    => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'dt_ref_ap'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nm_serv_muni_ds'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'AgentesPublicosTcm15092009', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agentes_publicos_tcm15092009[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AgentesPublicosTcm15092009';
  }


}
