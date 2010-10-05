<?php

/**
 * UnidOrcUgT form base class.
 *
 * @method UnidOrcUgT getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidOrcUgTForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'    => new sfWidgetFormInputText(),
      'dt_versao_orc'   => new sfWidgetFormInputText(),
      'cd_unid_gest_ug' => new sfWidgetFormInputText(),
      'cd_orgao'        => new sfWidgetFormInputText(),
      'cd_unid_orc'     => new sfWidgetFormInputText(),
      'dt_inclusao_uog' => new sfWidgetFormDateTime(),
      'dt_ref_uog'      => new sfWidgetFormInputText(),
      'dt_exclusao_uog' => new sfWidgetFormDateTime(),
      'id'              => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'    => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_unid_gest_ug' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_orgao'        => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'     => new sfValidatorString(array('max_length' => 4)),
      'dt_inclusao_uog' => new sfValidatorDateTime(),
      'dt_ref_uog'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_exclusao_uog' => new sfValidatorDateTime(array('required' => false)),
      'id'              => new sfValidatorPropelChoice(array('model' => 'UnidOrcUgT', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unid_orc_ug_t[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidOrcUgT';
  }


}
