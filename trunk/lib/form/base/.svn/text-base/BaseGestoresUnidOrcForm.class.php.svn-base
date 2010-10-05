<?php

/**
 * GestoresUnidOrc form base class.
 *
 * @method GestoresUnidOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGestoresUnidOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'dt_versao_orc'     => new sfWidgetFormInputHidden(),
      'cd_orgao'          => new sfWidgetFormInputHidden(),
      'cd_unid_orc'       => new sfWidgetFormInputHidden(),
      'dt_ini_gestao_guo' => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'  => new sfWidgetFormInputHidden(),
      'cd_ingresso'       => new sfWidgetFormInputHidden(),
      'cd_vinculo'        => new sfWidgetFormInputHidden(),
      'nu_expediente_no'  => new sfWidgetFormInputHidden(),
      'dt_ref_guo'        => new sfWidgetFormInputText(),
      'nm_gestor_guo'     => new sfWidgetFormInputText(),
      'cd_tipo_cargo'     => new sfWidgetFormPropelChoice(array('model' => 'TiposCargos', 'add_empty' => false)),
      'dt_fim_gestao_guo' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_ini_gestao_guo' => new sfValidatorPropelChoice(array('model' => 'GestoresUnidOrc', 'column' => 'dt_ini_gestao_guo', 'required' => false)),
      'cd_cpf_serv_muni'  => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'       => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'        => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no'  => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'nu_expediente_no', 'required' => false)),
      'dt_ref_guo'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_gestor_guo'     => new sfValidatorString(array('max_length' => 40)),
      'cd_tipo_cargo'     => new sfValidatorPropelChoice(array('model' => 'TiposCargos', 'column' => 'cd_tipo_cargo')),
      'dt_fim_gestao_guo' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gestores_unid_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GestoresUnidOrc';
  }


}
