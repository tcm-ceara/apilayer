<?php

/**
 * DadosGestao form base class.
 *
 * @method DadosGestao getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosGestaoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'              => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'             => new sfWidgetFormInputHidden(),
      'dt_ini_gestao'             => new sfWidgetFormInputHidden(),
      'dt_fim_gestao'             => new sfWidgetFormDateTime(),
      'dt_ato_nomeacao_gestor'    => new sfWidgetFormDateTime(),
      'nu_ato_nomeacao_gestor'    => new sfWidgetFormInputText(),
      'dt_public_nomeacao_gestor' => new sfWidgetFormDateTime(),
      'de_deleg_compet_gestor'    => new sfWidgetFormInputText(),
      'nu_matricula_gestor'       => new sfWidgetFormInputText(),
      'de_partido_gestor'         => new sfWidgetFormInputText(),
      'cd_tipo_cargo'             => new sfWidgetFormPropelChoice(array('model' => 'TiposCargos', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cd_municipio'              => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'             => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_ini_gestao'             => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'dt_ini_gestao', 'required' => false)),
      'dt_fim_gestao'             => new sfValidatorDateTime(array('required' => false)),
      'dt_ato_nomeacao_gestor'    => new sfValidatorDateTime(array('required' => false)),
      'nu_ato_nomeacao_gestor'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'dt_public_nomeacao_gestor' => new sfValidatorDateTime(array('required' => false)),
      'de_deleg_compet_gestor'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_matricula_gestor'       => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'de_partido_gestor'         => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'cd_tipo_cargo'             => new sfValidatorPropelChoice(array('model' => 'TiposCargos', 'column' => 'cd_tipo_cargo')),
    ));

    $this->widgetSchema->setNameFormat('dados_gestao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosGestao';
  }


}
