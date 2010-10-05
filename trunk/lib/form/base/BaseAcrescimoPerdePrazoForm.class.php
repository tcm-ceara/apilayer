<?php

/**
 * AcrescimoPerdePrazo form base class.
 *
 * @method AcrescimoPerdePrazo getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAcrescimoPerdePrazoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_doc_app'  => new sfWidgetFormInputText(),
      'cd_sigla_doc_app' => new sfWidgetFormInputText(),
      'de_doc_app'       => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_tipo_doc_app'  => new sfValidatorString(array('max_length' => 3)),
      'cd_sigla_doc_app' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'de_doc_app'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'AcrescimoPerdePrazo', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('acrescimo_perde_prazo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AcrescimoPerdePrazo';
  }


}
