<?php

/**
 * GestoresUg form base class.
 *
 * @method GestoresUg getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGestoresUgForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'dt_versao_orc'     => new sfWidgetFormInputHidden(),
      'cd_unid_gest_ug'   => new sfWidgetFormInputHidden(),
      'cd_orgao'          => new sfWidgetFormInputHidden(),
      'cd_unid_orc'       => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'  => new sfWidgetFormInputHidden(),
      'cd_ingresso'       => new sfWidgetFormInputHidden(),
      'cd_vinculo'        => new sfWidgetFormInputHidden(),
      'nu_expediente_no'  => new sfWidgetFormInputHidden(),
      'dt_ini_gestao_gug' => new sfWidgetFormInputHidden(),
      'dt_ref_gug'        => new sfWidgetFormInputText(),
      'nm_gestor_gug'     => new sfWidgetFormInputText(),
      'dt_fim_gestao_gug' => new sfWidgetFormDateTime(),
      'cd_tipo_cargo'     => new sfWidgetFormPropelChoice(array('model' => 'TiposCargos', 'add_empty' => false)),
      'st_ordenador_gug'  => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_unid_gest_ug'   => new sfValidatorPropelChoice(array('model' => 'UnidGestoras', 'column' => 'cd_unid_gest_ug', 'required' => false)),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'  => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'       => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'        => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no'  => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'nu_expediente_no', 'required' => false)),
      'dt_ini_gestao_gug' => new sfValidatorPropelChoice(array('model' => 'GestoresUg', 'column' => 'dt_ini_gestao_gug', 'required' => false)),
      'dt_ref_gug'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_gestor_gug'     => new sfValidatorString(array('max_length' => 40)),
      'dt_fim_gestao_gug' => new sfValidatorDateTime(array('required' => false)),
      'cd_tipo_cargo'     => new sfValidatorPropelChoice(array('model' => 'TiposCargos', 'column' => 'cd_tipo_cargo')),
      'st_ordenador_gug'  => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('gestores_ug[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GestoresUg';
  }


}
