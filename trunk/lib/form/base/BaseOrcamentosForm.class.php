<?php

/**
 * Orcamentos form base class.
 *
 * @method Orcamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'  => new sfWidgetFormInputHidden(),
      'dt_versao_orc' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'  => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc' => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orcamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orcamentos';
  }


}
