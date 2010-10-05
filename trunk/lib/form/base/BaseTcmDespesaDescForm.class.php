<?php

/**
 * TcmDespesaDesc form base class.
 *
 * @method TcmDespesaDesc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTcmDespesaDescForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'Nota_pagamento' => new sfWidgetFormInputHidden(),
      'Anoref'         => new sfWidgetFormInputHidden(),
      'Codigo_Despesa' => new sfWidgetFormInputHidden(),
      'Valor_desconto' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'Nota_pagamento' => new sfValidatorPropelChoice(array('model' => 'TcmDespesaDesc', 'column' => 'Nota_pagamento', 'required' => false)),
      'Anoref'         => new sfValidatorPropelChoice(array('model' => 'TcmDespesaDesc', 'column' => 'Anoref', 'required' => false)),
      'Codigo_Despesa' => new sfValidatorPropelChoice(array('model' => 'TcmDespesaDesc', 'column' => 'Codigo_Despesa', 'required' => false)),
      'Valor_desconto' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tcm_despesa_desc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TcmDespesaDesc';
  }


}
