<?php

/**
 * CboProfessores form base class.
 *
 * @method CboProfessores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCboProfessoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_ocup_cbo' => new sfWidgetFormInputText(),
      'de_ocup_cbo' => new sfWidgetFormInputText(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_ocup_cbo' => new sfValidatorString(array('max_length' => 6)),
      'de_ocup_cbo' => new sfValidatorString(array('max_length' => 255)),
      'id'          => new sfValidatorPropelChoice(array('model' => 'CboProfessores', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cbo_professores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CboProfessores';
  }


}
