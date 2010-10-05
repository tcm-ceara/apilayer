<?php

/**
 * ApoioLucene form base class.
 *
 * @method ApoioLucene getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseApoioLuceneForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_sequencial' => new sfWidgetFormInputHidden(),
      'nome_tabela'   => new sfWidgetFormInputText(),
      'campos_chave'  => new sfWidgetFormInputText(),
      'valores_chave' => new sfWidgetFormInputText(),
      'data_hora'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_sequencial' => new sfValidatorPropelChoice(array('model' => 'ApoioLucene', 'column' => 'id_sequencial', 'required' => false)),
      'nome_tabela'   => new sfValidatorString(array('max_length' => 30)),
      'campos_chave'  => new sfValidatorString(array('max_length' => 255)),
      'valores_chave' => new sfValidatorString(array('max_length' => 255)),
      'data_hora'     => new sfValidatorString(array('max_length' => 12)),
    ));

    $this->widgetSchema->setNameFormat('apoio_lucene[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApoioLucene';
  }


}
