<?php

/**
 * CnpjCamaras form base class.
 *
 * @method CnpjCamaras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCnpjCamarasForm extends BaseFormPropel
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
      'nomemuni' => new sfValidatorString(array('max_length' => 30)),
      'cnpj'     => new sfValidatorString(array('max_length' => 20)),
      'id'       => new sfValidatorPropelChoice(array('model' => 'CnpjCamaras', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cnpj_camaras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CnpjCamaras';
  }


}
