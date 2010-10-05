<?php

/**
 * Funcoes form base class.
 *
 * @method Funcoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFuncoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_funcao' => new sfWidgetFormInputHidden(),
      'nm_funcao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_funcao' => new sfValidatorPropelChoice(array('model' => 'Funcoes', 'column' => 'cd_funcao', 'required' => false)),
      'nm_funcao' => new sfValidatorString(array('max_length' => 120)),
    ));

    $this->widgetSchema->setNameFormat('funcoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcoes';
  }


}
