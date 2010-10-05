<?php

/**
 * ProgramasDel form base class.
 *
 * @method ProgramasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProgramasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'  => new sfWidgetFormInputText(),
      'dt_versao_orc' => new sfWidgetFormInputText(),
      'cd_programa'   => new sfWidgetFormInputText(),
      'nm_programa'   => new sfWidgetFormInputText(),
      'id'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'  => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_programa'   => new sfValidatorString(array('max_length' => 4)),
      'nm_programa'   => new sfValidatorString(array('max_length' => 120)),
      'id'            => new sfValidatorPropelChoice(array('model' => 'ProgramasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programas_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProgramasDel';
  }


}
