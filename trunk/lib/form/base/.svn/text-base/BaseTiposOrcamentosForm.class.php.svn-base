<?php

/**
 * TiposOrcamentos form base class.
 *
 * @method TiposOrcamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposOrcamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_orcamento' => new sfWidgetFormInputHidden(),
      'nm_tipo_orcamento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_tipo_orcamento' => new sfValidatorPropelChoice(array('model' => 'TiposOrcamentos', 'column' => 'cd_tipo_orcamento', 'required' => false)),
      'nm_tipo_orcamento' => new sfValidatorString(array('max_length' => 40)),
    ));

    $this->widgetSchema->setNameFormat('tipos_orcamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposOrcamentos';
  }


}
