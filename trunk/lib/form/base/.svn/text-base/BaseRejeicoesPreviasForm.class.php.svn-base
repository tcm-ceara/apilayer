<?php

/**
 * RejeicoesPrevias form base class.
 *
 * @method RejeicoesPrevias getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRejeicoesPreviasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_rejeiprev_rp' => new sfWidgetFormInputHidden(),
      'de_rejeiprev_rp' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_rejeiprev_rp' => new sfValidatorPropelChoice(array('model' => 'RejeicoesPrevias', 'column' => 'cd_rejeiprev_rp', 'required' => false)),
      'de_rejeiprev_rp' => new sfValidatorString(array('max_length' => 80)),
    ));

    $this->widgetSchema->setNameFormat('rejeicoes_previas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RejeicoesPrevias';
  }


}
