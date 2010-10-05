<?php

/**
 * Rubricas form base class.
 *
 * @method Rubricas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRubricasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_rubrica' => new sfWidgetFormInputHidden(),
      'nm_rubrica' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_rubrica' => new sfValidatorPropelChoice(array('model' => 'Rubricas', 'column' => 'cd_rubrica', 'required' => false)),
      'nm_rubrica' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('rubricas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rubricas';
  }


}
