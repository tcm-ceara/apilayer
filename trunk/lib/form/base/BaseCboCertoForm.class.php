<?php

/**
 * CboCerto form base class.
 *
 * @method CboCerto getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCboCertoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'CBO_Municipios' => new sfWidgetFormInputText(),
      'Descricao_CBO'  => new sfWidgetFormTextarea(),
      'F3'             => new sfWidgetFormInputText(),
      'F4'             => new sfWidgetFormInputText(),
      'id'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'CBO_Municipios' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Descricao_CBO'  => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'F3'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'F4'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'             => new sfValidatorPropelChoice(array('model' => 'CboCerto', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cbo_certo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CboCerto';
  }


}
