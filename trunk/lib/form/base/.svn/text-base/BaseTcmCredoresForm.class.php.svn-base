<?php

/**
 * TcmCredores form base class.
 *
 * @method TcmCredores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTcmCredoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'Seq'            => new sfWidgetFormInputHidden(),
      'Nome_credor'    => new sfWidgetFormInputText(),
      'Nu_nota_np'     => new sfWidgetFormInputText(),
      'Dt_versao_orc'  => new sfWidgetFormInputText(),
      'Valor_recebido' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'Seq'            => new sfValidatorPropelChoice(array('model' => 'TcmCredores', 'column' => 'Seq', 'required' => false)),
      'Nome_credor'    => new sfValidatorString(array('max_length' => 65)),
      'Nu_nota_np'     => new sfValidatorString(array('max_length' => 8)),
      'Dt_versao_orc'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'Valor_recebido' => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('tcm_credores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TcmCredores';
  }


}
