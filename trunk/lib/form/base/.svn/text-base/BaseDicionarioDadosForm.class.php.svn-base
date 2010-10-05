<?php

/**
 * DicionarioDados form base class.
 *
 * @method DicionarioDados getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDicionarioDadosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_campo'         => new sfWidgetFormInputHidden(),
      'id_tabela'        => new sfWidgetFormPropelChoice(array('model' => 'Tabelas', 'add_empty' => false)),
      'id_tipo'          => new sfWidgetFormPropelChoice(array('model' => 'CampoTipos', 'add_empty' => false)),
      'nm_campo'         => new sfWidgetFormInputText(),
      'nm_popular_Campo' => new sfWidgetFormInputText(),
      'de_Campo'         => new sfWidgetFormInputText(),
      'fl_requerido'     => new sfWidgetFormInputText(),
      'fl_ativo'         => new sfWidgetFormInputText(),
      'fl_entrada'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_campo'         => new sfValidatorPropelChoice(array('model' => 'DicionarioDados', 'column' => 'id_campo', 'required' => false)),
      'id_tabela'        => new sfValidatorPropelChoice(array('model' => 'Tabelas', 'column' => 'id_tabela')),
      'id_tipo'          => new sfValidatorPropelChoice(array('model' => 'CampoTipos', 'column' => 'id_tipo')),
      'nm_campo'         => new sfValidatorString(array('max_length' => 100)),
      'nm_popular_Campo' => new sfValidatorString(array('max_length' => 100)),
      'de_Campo'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fl_requerido'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fl_ativo'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fl_entrada'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dicionario_dados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DicionarioDados';
  }


}
