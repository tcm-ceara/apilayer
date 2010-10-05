<?php

/**
 * SitFuncionais form base class.
 *
 * @method SitFuncionais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSitFuncionaisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_sit_funcional' => new sfWidgetFormInputHidden(),
      'de_sit_funcional' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_sit_funcional' => new sfValidatorPropelChoice(array('model' => 'SitFuncionais', 'column' => 'cd_sit_funcional', 'required' => false)),
      'de_sit_funcional' => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('sit_funcionais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SitFuncionais';
  }


}
