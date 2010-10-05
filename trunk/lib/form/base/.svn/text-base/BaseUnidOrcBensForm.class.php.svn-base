<?php

/**
 * UnidOrcBens form base class.
 *
 * @method UnidOrcBens getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidOrcBensForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'nu_registro_bem'         => new sfWidgetFormInputHidden(),
      'dt_disponibilizacao_uob' => new sfWidgetFormInputHidden(),
      'dt_ref_uob'              => new sfWidgetFormInputText(),
      'dt_versao_orc'           => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
      'cd_orgao'                => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
      'cd_unid_orc'             => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
      'cd_cpf_serv_muni'        => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
      'cd_ingresso'             => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
      'cd_vinculo'              => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
      'nu_expediente_no'        => new sfWidgetFormPropelChoice(array('model' => 'AgentesPublicos', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_municipio', 'required' => false)),
      'nu_registro_bem'         => new sfValidatorPropelChoice(array('model' => 'BensMunicipios', 'column' => 'nu_registro_bem', 'required' => false)),
      'dt_disponibilizacao_uob' => new sfValidatorPropelChoice(array('model' => 'UnidOrcBens', 'column' => 'dt_disponibilizacao_uob', 'required' => false)),
      'dt_ref_uob'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'dt_versao_orc')),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_orgao')),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_unid_orc')),
      'cd_cpf_serv_muni'        => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_cpf_serv_muni')),
      'cd_ingresso'             => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_ingresso')),
      'cd_vinculo'              => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_vinculo')),
      'nu_expediente_no'        => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'nu_expediente_no')),
    ));

    $this->widgetSchema->setNameFormat('unid_orc_bens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidOrcBens';
  }


}
