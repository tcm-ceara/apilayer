<?php

/**
 * PagamentoNegociante form base class.
 *
 * @method PagamentoNegociante getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePagamentoNegocianteForm extends BaseFormPropel
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
      'cpf_cnpj' => new sfValidatorString(array('max_length' => 15)),
      'id'       => new sfValidatorPropelChoice(array('model' => 'PagamentoNegociante', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagamento_negociante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PagamentoNegociante';
  }


}
