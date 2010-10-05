<?php

/**
 * CredoresRel form base class.
 *
 * @method CredoresRel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCredoresRelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nm_negociante_ng' => new sfWidgetFormInputText(),
      'nu_doc_ng'        => new sfWidgetFormInputText(),
      'cd_municipio'     => new sfWidgetFormInputText(),
      'nm_municipio'     => new sfWidgetFormInputText(),
      'vl_empenhado'     => new sfWidgetFormInputText(),
      'vl_pago'          => new sfWidgetFormInputText(),
      'ano'              => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nm_negociante_ng' => new sfValidatorString(array('max_length' => 80)),
      'nu_doc_ng'        => new sfValidatorString(array('max_length' => 25)),
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'nm_municipio'     => new sfValidatorString(array('max_length' => 40)),
      'vl_empenhado'     => new sfValidatorNumber(),
      'vl_pago'          => new sfValidatorNumber(),
      'ano'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'CredoresRel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('credores_rel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CredoresRel';
  }


}
