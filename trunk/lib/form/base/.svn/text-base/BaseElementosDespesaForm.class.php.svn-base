<?php

/**
 * ElementosDespesa form base class.
 *
 * @method ElementosDespesa getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseElementosDespesaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_elemento_despesa'        => new sfWidgetFormInputHidden(),
      'descricao_elemento_despesa' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_elemento_despesa'        => new sfValidatorPropelChoice(array('model' => 'ElementosDespesa', 'column' => 'cd_elemento_despesa', 'required' => false)),
      'descricao_elemento_despesa' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('elementos_despesa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ElementosDespesa';
  }


}
