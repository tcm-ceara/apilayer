<?php

/**
 * BakCnpjmuni form base class.
 *
 * @method BakCnpjmuni getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBakCnpjmuniForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_cnpj'         => new sfWidgetFormInputText(),
      'num_cgf'          => new sfWidgetFormInputText(),
      'de_razao_social'  => new sfWidgetFormInputText(),
      'dt_ini_ativ'      => new sfWidgetFormDateTime(),
      'dt_baixa'         => new sfWidgetFormDateTime(),
      'num_junta'        => new sfWidgetFormInputText(),
      'num_cep'          => new sfWidgetFormInputText(),
      'num_fone'         => new sfWidgetFormInputText(),
      'num_cpf_contador' => new sfWidgetFormInputText(),
      'de_endereco'      => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'num_cnpj'         => new sfValidatorString(array('max_length' => 25)),
      'num_cgf'          => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'de_razao_social'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'dt_ini_ativ'      => new sfValidatorDateTime(array('required' => false)),
      'dt_baixa'         => new sfValidatorDateTime(array('required' => false)),
      'num_junta'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'num_cep'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'num_fone'         => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'num_cpf_contador' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_endereco'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'BakCnpjmuni', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bak_cnpjmuni[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BakCnpjmuni';
  }


}
