<?php

/**
 * GruposNaturezaDespesas form base class.
 *
 * @method GruposNaturezaDespesas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGruposNaturezaDespesasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_grupo_nat_despesa'        => new sfWidgetFormInputHidden(),
      'Descricao_grupo_nat_despesa' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_grupo_nat_despesa'        => new sfValidatorPropelChoice(array('model' => 'GruposNaturezaDespesas', 'column' => 'cd_grupo_nat_despesa', 'required' => false)),
      'Descricao_grupo_nat_despesa' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupos_natureza_despesas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GruposNaturezaDespesas';
  }


}
