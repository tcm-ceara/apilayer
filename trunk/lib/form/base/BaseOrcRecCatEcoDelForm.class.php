<?php

/**
 * OrcRecCatEcoDel form base class.
 *
 * @method OrcRecCatEcoDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcRecCatEcoDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'   => new sfWidgetFormInputText(),
      'dt_versao_orc'  => new sfWidgetFormInputText(),
      'cd_orgao'       => new sfWidgetFormInputText(),
      'cd_unid_orc'    => new sfWidgetFormInputText(),
      'cd_rubrica_or'  => new sfWidgetFormInputText(),
      'de_rubrica_or'  => new sfWidgetFormInputText(),
      'vl_prev_orc_or' => new sfWidgetFormInputText(),
      'id'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'   => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'       => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'    => new sfValidatorString(array('max_length' => 4)),
      'cd_rubrica_or'  => new sfValidatorString(array('max_length' => 12)),
      'de_rubrica_or'  => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'vl_prev_orc_or' => new sfValidatorNumber(array('required' => false)),
      'id'             => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEcoDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orc_rec_cat_eco_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrcRecCatEcoDel';
  }


}
