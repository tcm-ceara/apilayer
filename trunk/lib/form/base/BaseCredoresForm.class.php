<?php

/**
 * Credores form base class.
 *
 * @method Credores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCredoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tp_doc_credor'      => new sfWidgetFormInputHidden(),
      'de_doc_credor'      => new sfWidgetFormInputHidden(),
      'nm_credor'          => new sfWidgetFormInputText(),
      'de_endereco_credor' => new sfWidgetFormInputText(),
      'nu_fone_credor'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tp_doc_credor'      => new sfValidatorPropelChoice(array('model' => 'Credores', 'column' => 'tp_doc_credor', 'required' => false)),
      'de_doc_credor'      => new sfValidatorPropelChoice(array('model' => 'Credores', 'column' => 'de_doc_credor', 'required' => false)),
      'nm_credor'          => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'de_endereco_credor' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_credor'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('credores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Credores';
  }


}
