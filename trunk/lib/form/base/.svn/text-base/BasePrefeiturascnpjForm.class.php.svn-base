<?php

/**
 * Prefeiturascnpj form base class.
 *
 * @method Prefeiturascnpj getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePrefeiturascnpjForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'codmuni'  => new sfWidgetFormInputText(),
      'nomemuni' => new sfWidgetFormInputText(),
      'cnpj'     => new sfWidgetFormInputText(),
      'id'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codmuni'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nomemuni' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cnpj'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'       => new sfValidatorPropelChoice(array('model' => 'Prefeiturascnpj', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prefeiturascnpj[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prefeiturascnpj';
  }


}
