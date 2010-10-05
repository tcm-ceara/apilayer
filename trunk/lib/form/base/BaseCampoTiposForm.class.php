<?php

/**
 * CampoTipos form base class.
 *
 * @method CampoTipos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCampoTiposForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo'  => new sfWidgetFormInputHidden(),
      'nm_tipo'  => new sfWidgetFormInputText(),
      'de_tipo'  => new sfWidgetFormInputText(),
      'fl_ativo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo'  => new sfValidatorPropelChoice(array('model' => 'CampoTipos', 'column' => 'id_tipo', 'required' => false)),
      'nm_tipo'  => new sfValidatorString(array('max_length' => 100)),
      'de_tipo'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fl_ativo' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('campo_tipos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CampoTipos';
  }


}
