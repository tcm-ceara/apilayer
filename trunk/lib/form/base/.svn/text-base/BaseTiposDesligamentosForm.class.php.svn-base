<?php

/**
 * TiposDesligamentos form base class.
 *
 * @method TiposDesligamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposDesligamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_desligamento' => new sfWidgetFormInputHidden(),
      'de_desligamento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_desligamento' => new sfValidatorPropelChoice(array('model' => 'TiposDesligamentos', 'column' => 'cd_desligamento', 'required' => false)),
      'de_desligamento' => new sfValidatorString(array('max_length' => 25)),
    ));

    $this->widgetSchema->setNameFormat('tipos_desligamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposDesligamentos';
  }


}
