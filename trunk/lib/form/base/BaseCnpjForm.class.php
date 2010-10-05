<?php

/**
 * Cnpj form base class.
 *
 * @method Cnpj getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCnpjForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'CGF'          => new sfWidgetFormInputText(),
      'razao_social' => new sfWidgetFormInputText(),
      'ENDERECO'     => new sfWidgetFormInputText(),
      'CEP'          => new sfWidgetFormInputText(),
      'TEL_EMP'      => new sfWidgetFormInputText(),
      'CGC'          => new sfWidgetFormInputText(),
      'DAT_INI_AT'   => new sfWidgetFormDateTime(),
      'num_junta'    => new sfWidgetFormInputText(),
      'data_baixa'   => new sfWidgetFormDateTime(),
      'cpf_contador' => new sfWidgetFormInputText(),
      'id'           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'CGF'          => new sfValidatorNumber(array('required' => false)),
      'razao_social' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ENDERECO'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'CEP'          => new sfValidatorNumber(array('required' => false)),
      'TEL_EMP'      => new sfValidatorNumber(array('required' => false)),
      'CGC'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'DAT_INI_AT'   => new sfValidatorDateTime(array('required' => false)),
      'num_junta'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'data_baixa'   => new sfValidatorDateTime(array('required' => false)),
      'cpf_contador' => new sfValidatorNumber(array('required' => false)),
      'id'           => new sfValidatorPropelChoice(array('model' => 'Cnpj', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cnpj[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cnpj';
  }


}
