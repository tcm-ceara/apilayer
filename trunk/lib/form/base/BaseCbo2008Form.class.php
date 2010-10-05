<?php

/**
 * Cbo2008 form base class.
 *
 * @method Cbo2008 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCbo2008Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni' => new sfWidgetFormInputText(),
      'cd_ocup_cbo'      => new sfWidgetFormInputText(),
      'quantidade'       => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'cd_cpf_serv_muni' => new sfValidatorString(array('max_length' => 11)),
      'cd_ocup_cbo'      => new sfValidatorString(array('max_length' => 6)),
      'quantidade'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'Cbo2008', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cbo2008[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cbo2008';
  }


}
