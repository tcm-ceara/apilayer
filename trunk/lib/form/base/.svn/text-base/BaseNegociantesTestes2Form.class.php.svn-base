<?php

/**
 * NegociantesTestes2 form base class.
 *
 * @method NegociantesTestes2 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNegociantesTestes2Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_doc_ng'        => new sfWidgetFormInputText(),
      'cd_tipo_ng'       => new sfWidgetFormInputText(),
      'nm_negociante_ng' => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nu_doc_ng'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'cd_tipo_ng'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_negociante_ng' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'NegociantesTestes2', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('negociantes_testes2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NegociantesTestes2';
  }


}
