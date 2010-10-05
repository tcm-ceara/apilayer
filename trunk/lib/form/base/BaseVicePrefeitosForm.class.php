<?php

/**
 * VicePrefeitos form base class.
 *
 * @method VicePrefeitos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVicePrefeitosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'     => new sfWidgetFormInputHidden(),
      'dt_ini_gestao'     => new sfWidgetFormInputHidden(),
      'nm_vice_prefeito'  => new sfWidgetFormInputText(),
      'cpf_vice_prefeito' => new sfWidgetFormInputText(),
      'nu_matricula_vp'   => new sfWidgetFormInputText(),
      'de_partido_vp'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'     => new sfValidatorPropelChoice(array('model' => 'VicePrefeitos', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_ini_gestao'     => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'dt_ini_gestao', 'required' => false)),
      'nm_vice_prefeito'  => new sfValidatorString(array('max_length' => 40)),
      'cpf_vice_prefeito' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_matricula_vp'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'de_partido_vp'     => new sfValidatorString(array('max_length' => 35, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vice_prefeitos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VicePrefeitos';
  }


}
