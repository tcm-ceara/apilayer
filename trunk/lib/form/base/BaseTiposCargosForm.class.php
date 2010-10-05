<?php

/**
 * TiposCargos form base class.
 *
 * @method TiposCargos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposCargosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_cargo' => new sfWidgetFormInputHidden(),
      'nm_tipo_cargo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_tipo_cargo' => new sfValidatorPropelChoice(array('model' => 'TiposCargos', 'column' => 'cd_tipo_cargo', 'required' => false)),
      'nm_tipo_cargo' => new sfValidatorString(array('max_length' => 40)),
    ));

    $this->widgetSchema->setNameFormat('tipos_cargos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposCargos';
  }


}
