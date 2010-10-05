<?php

/**
 * Gestores form base class.
 *
 * @method Gestores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGestoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'  => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor' => new sfWidgetFormInputHidden(),
      'nm_gestor'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'  => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor' => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'nm_gestor'     => new sfValidatorString(array('max_length' => 40)),
    ));

    $this->widgetSchema->setNameFormat('gestores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Gestores';
  }


}
