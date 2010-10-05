<?php

/**
 * PrazosEntrega form base class.
 *
 * @method PrazosEntrega getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePrazosEntregaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'dt_referencia' => new sfWidgetFormInputText(),
      'dt_limite'     => new sfWidgetFormDateTime(),
      'dt_limite_orc' => new sfWidgetFormDateTime(),
      'id'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'dt_referencia' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_limite'     => new sfValidatorDateTime(),
      'dt_limite_orc' => new sfValidatorDateTime(array('required' => false)),
      'id'            => new sfValidatorPropelChoice(array('model' => 'PrazosEntrega', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prazos_entrega[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PrazosEntrega';
  }


}
