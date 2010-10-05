<?php

/**
 * GrausInstrucao form base class.
 *
 * @method GrausInstrucao getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGrausInstrucaoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_instrucao' => new sfWidgetFormInputHidden(),
      'de_instrucao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_instrucao' => new sfValidatorPropelChoice(array('model' => 'GrausInstrucao', 'column' => 'cd_instrucao', 'required' => false)),
      'de_instrucao' => new sfValidatorString(array('max_length' => 35)),
    ));

    $this->widgetSchema->setNameFormat('graus_instrucao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrausInstrucao';
  }


}
