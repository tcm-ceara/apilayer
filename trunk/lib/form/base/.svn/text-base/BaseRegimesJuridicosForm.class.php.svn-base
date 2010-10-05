<?php

/**
 * RegimesJuridicos form base class.
 *
 * @method RegimesJuridicos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRegimesJuridicosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_regime_juridico' => new sfWidgetFormInputHidden(),
      'de_regime_juridico' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_regime_juridico' => new sfValidatorPropelChoice(array('model' => 'RegimesJuridicos', 'column' => 'cd_regime_juridico', 'required' => false)),
      'de_regime_juridico' => new sfValidatorString(array('max_length' => 35)),
    ));

    $this->widgetSchema->setNameFormat('regimes_juridicos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RegimesJuridicos';
  }


}
