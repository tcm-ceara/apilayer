<?php

/**
 * DadosGestores form base class.
 *
 * @method DadosGestores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosGestoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'       => new sfWidgetFormInputHidden(),
      'nu_seq_ender_gestor' => new sfWidgetFormInputHidden(),
      'de_ender_gestor'     => new sfWidgetFormInputText(),
      'nu_cep_gestor'       => new sfWidgetFormInputText(),
      'nu_fone_gestor'      => new sfWidgetFormInputText(),
      'nm_gestor'           => new sfWidgetFormInputText(),
      'de_email_gestor'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'       => new sfValidatorPropelChoice(array('model' => 'DadosGestores', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'nu_seq_ender_gestor' => new sfValidatorPropelChoice(array('model' => 'DadosGestores', 'column' => 'nu_seq_ender_gestor', 'required' => false)),
      'de_ender_gestor'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_gestor'       => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nu_fone_gestor'      => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_gestor'           => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_email_gestor'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_gestores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosGestores';
  }


}
