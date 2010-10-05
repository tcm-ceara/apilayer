<?php

/**
 * Camarascnpj form base class.
 *
 * @method Camarascnpj getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCamarascnpjForm extends BaseFormPropel
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
      'codmuni'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nomemuni' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cnpj'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'       => new sfValidatorPropelChoice(array('model' => 'Camarascnpj', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('camarascnpj[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Camarascnpj';
  }


}
