<?php

/**
 * ModalidadeAplicacaoDespesa form base class.
 *
 * @method ModalidadeAplicacaoDespesa getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseModalidadeAplicacaoDespesaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_modalidade_despesa'        => new sfWidgetFormInputHidden(),
      'Descricao_modalidade_despesa' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_modalidade_despesa'        => new sfValidatorPropelChoice(array('model' => 'ModalidadeAplicacaoDespesa', 'column' => 'cd_modalidade_despesa', 'required' => false)),
      'Descricao_modalidade_despesa' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('modalidade_aplicacao_despesa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ModalidadeAplicacaoDespesa';
  }


}
