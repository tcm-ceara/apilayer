<?php

/**
 * PagamentoNegocianteBak160909 form base class.
 *
 * @method PagamentoNegocianteBak160909 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePagamentoNegocianteBak160909Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'seq'      => new sfWidgetFormInputText(),
      'cpf_cnpj' => new sfWidgetFormInputText(),
      'id'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'seq'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cpf_cnpj' => new sfValidatorString(array('max_length' => 14)),
      'id'       => new sfValidatorPropelChoice(array('model' => 'PagamentoNegocianteBak160909', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagamento_negociante_bak160909[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PagamentoNegocianteBak160909';
  }


}
