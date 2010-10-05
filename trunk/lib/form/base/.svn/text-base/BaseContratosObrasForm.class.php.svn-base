<?php

/**
 * ContratosObras form base class.
 *
 * @method ContratosObras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContratosObrasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'          => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'         => new sfWidgetFormInputHidden(),
      'dt_contrato'           => new sfWidgetFormInputHidden(),
      'nu_contrato'           => new sfWidgetFormInputHidden(),
      'dt_ini_obra_srv'       => new sfWidgetFormInputHidden(),
      'tp_obra_srv'           => new sfWidgetFormInputHidden(),
      'nu_obra_srv'           => new sfWidgetFormInputHidden(),
      'dt_prazo_fim_obra_srv' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_municipio'          => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'         => new sfValidatorPropelChoice(array('model' => 'ContratosObras', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_contrato'           => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'dt_contrato', 'required' => false)),
      'nu_contrato'           => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'nu_contrato', 'required' => false)),
      'dt_ini_obra_srv'       => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'dt_ini_obra_srv', 'required' => false)),
      'tp_obra_srv'           => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'tp_obra_srv', 'required' => false)),
      'nu_obra_srv'           => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'nu_obra_srv', 'required' => false)),
      'dt_prazo_fim_obra_srv' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contratos_obras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContratosObras';
  }


}
