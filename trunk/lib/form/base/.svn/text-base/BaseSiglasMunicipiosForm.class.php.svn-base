<?php

/**
 * SiglasMunicipios form base class.
 *
 * @method SiglasMunicipios getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSiglasMunicipiosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio' => new sfWidgetFormInputText(),
      'nm_municipio' => new sfWidgetFormInputText(),
      'sigla'        => new sfWidgetFormInputText(),
      'id'           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio' => new sfValidatorString(array('max_length' => 3)),
      'nm_municipio' => new sfValidatorString(array('max_length' => 40)),
      'sigla'        => new sfValidatorString(array('max_length' => 3)),
      'id'           => new sfValidatorPropelChoice(array('model' => 'SiglasMunicipios', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('siglas_municipios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SiglasMunicipios';
  }


}
