<?php

/**
 * UoLimite form base class.
 *
 * @method UoLimite getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUoLimiteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_seq' => new sfWidgetFormInputText(),
      'id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nu_seq' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'id'     => new sfValidatorPropelChoice(array('model' => 'UoLimite', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('uo_limite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UoLimite';
  }


}
