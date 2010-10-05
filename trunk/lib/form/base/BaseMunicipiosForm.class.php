<?php

/**
 * Municipios form base class.
 *
 * @method Municipios getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMunicipiosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'   => new sfWidgetFormInputHidden(),
      'nm_municipio'   => new sfWidgetFormInputText(),
      'dt_lei_criacao' => new sfWidgetFormDateTime(),
      'de_lei_criacao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'   => new sfValidatorPropelChoice(array('model' => 'Municipios', 'column' => 'cd_municipio', 'required' => false)),
      'nm_municipio'   => new sfValidatorString(array('max_length' => 40)),
      'dt_lei_criacao' => new sfValidatorDateTime(array('required' => false)),
      'de_lei_criacao' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('municipios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Municipios';
  }


}
