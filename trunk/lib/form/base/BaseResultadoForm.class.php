<?php

/**
 * Resultado form base class.
 *
 * @method Resultado getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseResultadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      't_nm_municipio' => new sfWidgetFormInputText(),
      't_tipo'         => new sfWidgetFormInputText(),
      't_mes'          => new sfWidgetFormInputText(),
      't_cod_mes'      => new sfWidgetFormInputText(),
      'id'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      't_nm_municipio' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      't_tipo'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      't_mes'          => new sfValidatorString(array('max_length' => 9, 'required' => false)),
      't_cod_mes'      => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'id'             => new sfValidatorPropelChoice(array('model' => 'Resultado', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resultado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultado';
  }


}
