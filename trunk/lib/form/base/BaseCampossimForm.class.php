<?php

/**
 * Campossim form base class.
 *
 * @method Campossim getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCampossimForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nm_campo_db' => new sfWidgetFormInputHidden(),
      'nm_campo_ma' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nm_campo_db' => new sfValidatorPropelChoice(array('model' => 'Campossim', 'column' => 'nm_campo_db', 'required' => false)),
      'nm_campo_ma' => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('campossim[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Campossim';
  }


}
