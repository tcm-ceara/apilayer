<?php

/**
 * PcGovernoSim form base class.
 *
 * @method PcGovernoSim getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePcGovernoSimForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio' => new sfWidgetFormInputHidden(),
      'nu_exercicio' => new sfWidgetFormInputHidden(),
      'cd_campo_rel' => new sfWidgetFormInputHidden(),
      'vl_campo_rel' => new sfWidgetFormInputText(),
      'de_campo_rel' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio' => new sfValidatorPropelChoice(array('model' => 'PcGovernoSim', 'column' => 'cd_municipio', 'required' => false)),
      'nu_exercicio' => new sfValidatorPropelChoice(array('model' => 'PcGovernoSim', 'column' => 'nu_exercicio', 'required' => false)),
      'cd_campo_rel' => new sfValidatorPropelChoice(array('model' => 'PcGovernoSim', 'column' => 'cd_campo_rel', 'required' => false)),
      'vl_campo_rel' => new sfValidatorNumber(array('required' => false)),
      'de_campo_rel' => new sfValidatorString(array('max_length' => 60)),
    ));

    $this->widgetSchema->setNameFormat('pc_governo_sim[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PcGovernoSim';
  }


}
