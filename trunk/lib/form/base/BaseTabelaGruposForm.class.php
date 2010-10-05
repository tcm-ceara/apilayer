<?php

/**
 * TabelaGrupos form base class.
 *
 * @method TabelaGrupos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTabelaGruposForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_grupo' => new sfWidgetFormInputHidden(),
      'nm_grupo' => new sfWidgetFormInputText(),
      'de_grupo' => new sfWidgetFormInputText(),
      'fl_ativo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_grupo' => new sfValidatorPropelChoice(array('model' => 'TabelaGrupos', 'column' => 'id_grupo', 'required' => false)),
      'nm_grupo' => new sfValidatorString(array('max_length' => 100)),
      'de_grupo' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fl_ativo' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tabela_grupos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TabelaGrupos';
  }


}
