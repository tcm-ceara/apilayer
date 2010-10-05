<?php

/**
 * CnpjPrefeituras form base class.
 *
 * @method CnpjPrefeituras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCnpjPrefeiturasForm extends BaseFormPropel
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
      'codmuni'  => new sfValidatorString(array('max_length' => 3)),
      'nomemuni' => new sfValidatorString(array('max_length' => 80)),
      'cnpj'     => new sfValidatorString(array('max_length' => 20)),
      'id'       => new sfValidatorPropelChoice(array('model' => 'CnpjPrefeituras', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cnpj_prefeituras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CnpjPrefeituras';
  }


}
