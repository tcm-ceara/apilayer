<?php

/**
 * Vereadores form base class.
 *
 * @method Vereadores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVereadoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'nu_cpf_vereador'   => new sfWidgetFormInputHidden(),
      'dt_ini_mandato_ve' => new sfWidgetFormInputHidden(),
      'dt_fim_mandato_ve' => new sfWidgetFormDateTime(),
      'nm_vereador_ve'    => new sfWidgetFormInputText(),
      'de_partido_ve'     => new sfWidgetFormInputText(),
      'de_endereco_ve'    => new sfWidgetFormInputText(),
      'nu_cep_ve'         => new sfWidgetFormInputText(),
      'nu_fone_ve'        => new sfWidgetFormInputText(),
      'de_email_ve'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'Vereadores', 'column' => 'cd_municipio', 'required' => false)),
      'nu_cpf_vereador'   => new sfValidatorPropelChoice(array('model' => 'Vereadores', 'column' => 'nu_cpf_vereador', 'required' => false)),
      'dt_ini_mandato_ve' => new sfValidatorPropelChoice(array('model' => 'Vereadores', 'column' => 'dt_ini_mandato_ve', 'required' => false)),
      'dt_fim_mandato_ve' => new sfValidatorDateTime(array('required' => false)),
      'nm_vereador_ve'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_partido_ve'     => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'de_endereco_ve'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_ve'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nu_fone_ve'        => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_email_ve'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vereadores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vereadores';
  }


}
