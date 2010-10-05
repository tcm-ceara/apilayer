<?php

/**
 * TiposExpedientes form base class.
 *
 * @method TiposExpedientes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposExpedientesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_expediente' => new sfWidgetFormInputHidden(),
      'de_expediente' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_expediente' => new sfValidatorPropelChoice(array('model' => 'TiposExpedientes', 'column' => 'cd_expediente', 'required' => false)),
      'de_expediente' => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->widgetSchema->setNameFormat('tipos_expedientes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposExpedientes';
  }


}
