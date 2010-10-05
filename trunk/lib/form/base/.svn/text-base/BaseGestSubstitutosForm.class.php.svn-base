<?php

/**
 * GestSubstitutos form base class.
 *
 * @method GestSubstitutos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGestSubstitutosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'            => new sfWidgetFormInputHidden(),
      'dt_ini_gestao'            => new sfWidgetFormInputHidden(),
      'dt_ini_gest_substit'      => new sfWidgetFormInputHidden(),
      'dt_fim_gest_substit'      => new sfWidgetFormDateTime(),
      'tp_substituicao_gest'     => new sfWidgetFormInputText(),
      'de_motivo_substit_gest'   => new sfWidgetFormInputText(),
      'nu_cpf_gest_substit'      => new sfWidgetFormInputText(),
      'nm_gest_substit'          => new sfWidgetFormInputText(),
      'de_ender_gest_substit'    => new sfWidgetFormInputText(),
      'nu_cep_gest_substit'      => new sfWidgetFormInputText(),
      'nu_telefone_gest_substit' => new sfWidgetFormInputText(),
      'de_email_gest_substit'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'            => new sfValidatorPropelChoice(array('model' => 'GestSubstitutos', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_ini_gestao'            => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'dt_ini_gestao', 'required' => false)),
      'dt_ini_gest_substit'      => new sfValidatorPropelChoice(array('model' => 'GestSubstitutos', 'column' => 'dt_ini_gest_substit', 'required' => false)),
      'dt_fim_gest_substit'      => new sfValidatorDateTime(array('required' => false)),
      'tp_substituicao_gest'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_motivo_substit_gest'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cpf_gest_substit'      => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_gest_substit'          => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_ender_gest_substit'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_gest_substit'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nu_telefone_gest_substit' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_email_gest_substit'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gest_substitutos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GestSubstitutos';
  }


}
