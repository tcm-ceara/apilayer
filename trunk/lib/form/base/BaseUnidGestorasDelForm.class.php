<?php

/**
 * UnidGestorasDel form base class.
 *
 * @method UnidGestorasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidGestorasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputText(),
      'dt_versao_orc'     => new sfWidgetFormInputText(),
      'cd_unid_gest_ug'   => new sfWidgetFormInputText(),
      'dt_ref_ug'         => new sfWidgetFormInputText(),
      'nm_unid_gest_ug'   => new sfWidgetFormInputText(),
      'dt_criacao_ug'     => new sfWidgetFormDateTime(),
      'dt_extincao_ug'    => new sfWidgetFormDateTime(),
      'nu_lei_criacao_ug' => new sfWidgetFormInputText(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_unid_gest_ug'   => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'dt_ref_ug'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_unid_gest_ug'   => new sfValidatorString(array('max_length' => 80)),
      'dt_criacao_ug'     => new sfValidatorDateTime(),
      'dt_extincao_ug'    => new sfValidatorDateTime(array('required' => false)),
      'nu_lei_criacao_ug' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'id'                => new sfValidatorPropelChoice(array('model' => 'UnidGestorasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unid_gestoras_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidGestorasDel';
  }


}
