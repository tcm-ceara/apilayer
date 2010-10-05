<?php

/**
 * OrcDespCatEcoDel2 form base class.
 *
 * @method OrcDespCatEcoDel2 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcDespCatEcoDel2Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputText(),
      'dt_versao_orc'    => new sfWidgetFormInputText(),
      'cd_orgao'         => new sfWidgetFormInputText(),
      'cd_unid_orc'      => new sfWidgetFormInputText(),
      'cd_elemento_od'   => new sfWidgetFormInputText(),
      'de_elemento_od'   => new sfWidgetFormInputText(),
      'vl_tot_fix_ce_od' => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'         => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'      => new sfValidatorString(array('max_length' => 4)),
      'cd_elemento_od'   => new sfValidatorString(array('max_length' => 8)),
      'de_elemento_od'   => new sfValidatorString(array('max_length' => 120)),
      'vl_tot_fix_ce_od' => new sfValidatorNumber(),
      'id'               => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEcoDel2', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orc_desp_cat_eco_del2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrcDespCatEcoDel2';
  }


}
