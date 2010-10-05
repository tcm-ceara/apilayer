<?php

/**
 * AtualizaNaoperdePrazo form base class.
 *
 * @method AtualizaNaoperdePrazo getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAtualizaNaoperdePrazoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_doc_anp'  => new sfWidgetFormInputText(),
      'cd_sigla_doc_anp' => new sfWidgetFormInputText(),
      'de_doc_anp'       => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_tipo_doc_anp'  => new sfValidatorString(array('max_length' => 3)),
      'cd_sigla_doc_anp' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'de_doc_anp'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'AtualizaNaoperdePrazo', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('atualiza_naoperde_prazo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AtualizaNaoperdePrazo';
  }


}
