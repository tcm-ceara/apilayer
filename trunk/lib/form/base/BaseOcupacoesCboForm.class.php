<?php

/**
 * OcupacoesCbo form base class.
 *
 * @method OcupacoesCbo getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOcupacoesCboForm extends BaseFormPropel
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
      'id'          => new sfValidatorPropelChoice(array('model' => 'OcupacoesCbo', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ocupacoes_cbo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OcupacoesCbo';
  }


}
