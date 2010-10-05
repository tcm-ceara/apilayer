<?php

/**
 * EstadosCivis form base class.
 *
 * @method EstadosCivis getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstadosCivisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_est_civil' => new sfWidgetFormInputHidden(),
      'de_est_civil' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_est_civil' => new sfValidatorPropelChoice(array('model' => 'EstadosCivis', 'column' => 'cd_est_civil', 'required' => false)),
      'de_est_civil' => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->widgetSchema->setNameFormat('estados_civis[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadosCivis';
  }


}
