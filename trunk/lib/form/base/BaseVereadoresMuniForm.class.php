<?php

/**
 * VereadoresMuni form base class.
 *
 * @method VereadoresMuni getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVereadoresMuniForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'  => new sfWidgetFormInputHidden(),
      'dt_versao_orc' => new sfWidgetFormInputText(),
      'nu_vereadores' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'  => new sfValidatorPropelChoice(array('model' => 'VereadoresMuni', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_vereadores' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
    ));

    $this->widgetSchema->setNameFormat('vereadores_muni[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VereadoresMuni';
  }


}
