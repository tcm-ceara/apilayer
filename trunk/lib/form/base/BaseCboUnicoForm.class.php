<?php

/**
 * CboUnico form base class.
 *
 * @method CboUnico getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCboUnicoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_ocup_cbo' => new sfWidgetFormInputText(),
      'de_ocup_cbo' => new sfWidgetFormInputText(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_ocup_cbo' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'de_ocup_cbo' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'          => new sfValidatorPropelChoice(array('model' => 'CboUnico', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cbo_unico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CboUnico';
  }


}
