<?php

/**
 * Tabelassim form base class.
 *
 * @method Tabelassim getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTabelassimForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nm_tabela_db' => new sfWidgetFormInputHidden(),
      'nm_tabela_ma' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nm_tabela_db' => new sfValidatorPropelChoice(array('model' => 'Tabelassim', 'column' => 'nm_tabela_db', 'required' => false)),
      'nm_tabela_ma' => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('tabelassim[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tabelassim';
  }


}
