<?php

/**
 * MuniLiberados form base class.
 *
 * @method MuniLiberados getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMuniLiberadosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputText(),
      'cd_orgao'         => new sfWidgetFormInputText(),
      'cd_unid_orc'      => new sfWidgetFormInputText(),
      'cd_tipo_unid_adm' => new sfWidgetFormInputText(),
      'dt_ref'           => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cd_orgao'         => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_unid_orc'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_tipo_unid_adm' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'dt_ref'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'MuniLiberados', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('muni_liberados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MuniLiberados';
  }


}
