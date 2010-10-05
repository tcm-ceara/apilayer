<?php

/**
 * TcmDiariasCredores form base class.
 *
 * @method TcmDiariasCredores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTcmDiariasCredoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'Seq'             => new sfWidgetFormInputHidden(),
      'Nome_Credor'     => new sfWidgetFormInputText(),
      'Nu_Nota_NP'      => new sfWidgetFormInputText(),
      'Nu_Nota_Empenho' => new sfWidgetFormInputText(),
      'Dt_Versao_Orc'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'Seq'             => new sfValidatorPropelChoice(array('model' => 'TcmDiariasCredores', 'column' => 'Seq', 'required' => false)),
      'Nome_Credor'     => new sfValidatorString(array('max_length' => 80)),
      'Nu_Nota_NP'      => new sfValidatorString(array('max_length' => 8)),
      'Nu_Nota_Empenho' => new sfValidatorString(array('max_length' => 12)),
      'Dt_Versao_Orc'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->widgetSchema->setNameFormat('tcm_diarias_credores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TcmDiariasCredores';
  }


}
