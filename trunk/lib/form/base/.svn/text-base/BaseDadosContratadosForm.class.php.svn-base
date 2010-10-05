<?php

/**
 * DadosContratados form base class.
 *
 * @method DadosContratados getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosContratadosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tp_doc_contratado'      => new sfWidgetFormInputHidden(),
      'nu_doc_contratado'      => new sfWidgetFormInputHidden(),
      'nm_contratado'          => new sfWidgetFormInputText(),
      'de_endereco_contratado' => new sfWidgetFormInputText(),
      'nu_fone_contratado'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tp_doc_contratado'      => new sfValidatorPropelChoice(array('model' => 'DadosContratados', 'column' => 'tp_doc_contratado', 'required' => false)),
      'nu_doc_contratado'      => new sfValidatorPropelChoice(array('model' => 'DadosContratados', 'column' => 'nu_doc_contratado', 'required' => false)),
      'nm_contratado'          => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'de_endereco_contratado' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_contratado'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_contratados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosContratados';
  }


}
