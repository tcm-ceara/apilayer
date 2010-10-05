<?php

/**
 * TiposAmparosLegais form base class.
 *
 * @method TiposAmparosLegais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposAmparosLegaisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_amparo_legal' => new sfWidgetFormInputHidden(),
      'de_amparo_legal' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_amparo_legal' => new sfValidatorPropelChoice(array('model' => 'TiposAmparosLegais', 'column' => 'cd_amparo_legal', 'required' => false)),
      'de_amparo_legal' => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('tipos_amparos_legais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposAmparosLegais';
  }


}
