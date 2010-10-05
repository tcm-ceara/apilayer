<?php

/**
 * TiposReingressos form base class.
 *
 * @method TiposReingressos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposReingressosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_reingresso' => new sfWidgetFormInputHidden(),
      'de_reingresso' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_reingresso' => new sfValidatorPropelChoice(array('model' => 'TiposReingressos', 'column' => 'cd_reingresso', 'required' => false)),
      'de_reingresso' => new sfValidatorString(array('max_length' => 25)),
    ));

    $this->widgetSchema->setNameFormat('tipos_reingressos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposReingressos';
  }


}
