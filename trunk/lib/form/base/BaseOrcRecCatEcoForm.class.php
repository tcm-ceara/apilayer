<?php

/**
 * OrcRecCatEco form base class.
 *
 * @method OrcRecCatEco getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcRecCatEcoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'   => new sfWidgetFormInputHidden(),
      'dt_versao_orc'  => new sfWidgetFormInputHidden(),
      'cd_orgao'       => new sfWidgetFormInputHidden(),
      'cd_unid_orc'    => new sfWidgetFormInputHidden(),
      'cd_rubrica_or'  => new sfWidgetFormInputHidden(),
      'de_rubrica_or'  => new sfWidgetFormInputText(),
      'vl_prev_orc_or' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'   => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'  => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'       => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'    => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_rubrica_or'  => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_rubrica_or', 'required' => false)),
      'de_rubrica_or'  => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'vl_prev_orc_or' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orc_rec_cat_eco[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrcRecCatEco';
  }


}
