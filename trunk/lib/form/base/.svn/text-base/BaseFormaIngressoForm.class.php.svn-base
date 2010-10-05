<?php

/**
 * FormaIngresso form base class.
 *
 * @method FormaIngresso getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFormaIngressoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_ingresso_fi' => new sfWidgetFormInputHidden(),
      'de_ingresso_fi' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_ingresso_fi' => new sfValidatorPropelChoice(array('model' => 'FormaIngresso', 'column' => 'cd_ingresso_fi', 'required' => false)),
      'de_ingresso_fi' => new sfValidatorString(array('max_length' => 25)),
    ));

    $this->widgetSchema->setNameFormat('forma_ingresso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormaIngresso';
  }


}
