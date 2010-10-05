<?php

/**
 * Setores form base class.
 *
 * @method Setores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSetoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ti_codsetor_se' => new sfWidgetFormInputHidden(),
      'ch_setor_se'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ti_codsetor_se' => new sfValidatorPropelChoice(array('model' => 'Setores', 'column' => 'ti_codsetor_se', 'required' => false)),
      'ch_setor_se'    => new sfValidatorString(array('max_length' => 25)),
    ));

    $this->widgetSchema->setNameFormat('setores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Setores';
  }


}
