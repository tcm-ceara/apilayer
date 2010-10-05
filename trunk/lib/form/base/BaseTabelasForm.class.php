<?php

/**
 * Tabelas form base class.
 *
 * @method Tabelas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTabelasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tabela'         => new sfWidgetFormInputHidden(),
      'id_grupo'          => new sfWidgetFormPropelChoice(array('model' => 'TabelaGrupos', 'add_empty' => false)),
      'nm_tabela'         => new sfWidgetFormInputText(),
      'nm_popular_tabela' => new sfWidgetFormInputText(),
      'de_tabela'         => new sfWidgetFormInputText(),
      'fl_ativo'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tabela'         => new sfValidatorPropelChoice(array('model' => 'Tabelas', 'column' => 'id_tabela', 'required' => false)),
      'id_grupo'          => new sfValidatorPropelChoice(array('model' => 'TabelaGrupos', 'column' => 'id_grupo')),
      'nm_tabela'         => new sfValidatorString(array('max_length' => 100)),
      'nm_popular_tabela' => new sfValidatorString(array('max_length' => 100)),
      'de_tabela'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fl_ativo'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tabelas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tabelas';
  }


}
