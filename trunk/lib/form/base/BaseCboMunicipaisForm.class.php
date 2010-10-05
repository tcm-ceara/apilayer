<?php

/**
 * CboMunicipais form base class.
 *
 * @method CboMunicipais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCboMunicipaisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_ocup_cbom' => new sfWidgetFormInputHidden(),
      'de_ocup_cbom' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_ocup_cbom' => new sfValidatorPropelChoice(array('model' => 'CboMunicipais', 'column' => 'cd_ocup_cbom', 'required' => false)),
      'de_ocup_cbom' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('cbo_municipais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CboMunicipais';
  }


}
