<?php

/**
 * DespesasCategoriasEconomicas form base class.
 *
 * @method DespesasCategoriasEconomicas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDespesasCategoriasEconomicasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'Codigo_categoria_despesa'    => new sfWidgetFormInputHidden(),
      'Descricao_categoria_despesa' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'Codigo_categoria_despesa'    => new sfValidatorPropelChoice(array('model' => 'DespesasCategoriasEconomicas', 'column' => 'Codigo_categoria_despesa', 'required' => false)),
      'Descricao_categoria_despesa' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('despesas_categorias_economicas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DespesasCategoriasEconomicas';
  }


}
