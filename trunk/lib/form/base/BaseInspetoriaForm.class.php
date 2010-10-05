<?php

/**
 * Inspetoria form base class.
 *
 * @method Inspetoria getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseInspetoriaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ti_cod_insp_in' => new sfWidgetFormInputHidden(),
      'ti_codsetor_se' => new sfWidgetFormInputHidden(),
      'dt_criacao_in'  => new sfWidgetFormDateTime(),
      'vc_nome_in'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ti_cod_insp_in' => new sfValidatorPropelChoice(array('model' => 'Inspetoria', 'column' => 'ti_cod_insp_in', 'required' => false)),
      'ti_codsetor_se' => new sfValidatorPropelChoice(array('model' => 'Inspetoria', 'column' => 'ti_codsetor_se', 'required' => false)),
      'dt_criacao_in'  => new sfValidatorDateTime(),
      'vc_nome_in'     => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('inspetoria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inspetoria';
  }


}
