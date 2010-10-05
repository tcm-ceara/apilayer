<?php

/**
 * Desligamentos form base class.
 *
 * @method Desligamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDesligamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_versao_orc'    => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc'      => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni' => new sfWidgetFormInputHidden(),
      'cd_ingresso'      => new sfWidgetFormInputHidden(),
      'cd_vinculo'       => new sfWidgetFormInputHidden(),
      'nu_expediente_no' => new sfWidgetFormInputHidden(),
      'nu_expediente_de' => new sfWidgetFormInputHidden(),
      'cd_desligamento'  => new sfWidgetFormPropelChoice(array('model' => 'TiposDesligamentos', 'add_empty' => false)),
      'cd_expediente'    => new sfWidgetFormPropelChoice(array('model' => 'TiposExpedientes', 'add_empty' => false)),
      'dt_expediente_de' => new sfWidgetFormDateTime(),
      'dt_public_de'     => new sfWidgetFormDateTime(),
      'st_reingresso_de' => new sfWidgetFormInputText(),
      'dt_ref_de'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni' => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'      => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'       => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no' => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'nu_expediente_no', 'required' => false)),
      'nu_expediente_de' => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'nu_expediente_de', 'required' => false)),
      'cd_desligamento'  => new sfValidatorPropelChoice(array('model' => 'TiposDesligamentos', 'column' => 'cd_desligamento')),
      'cd_expediente'    => new sfValidatorPropelChoice(array('model' => 'TiposExpedientes', 'column' => 'cd_expediente')),
      'dt_expediente_de' => new sfValidatorDateTime(),
      'dt_public_de'     => new sfValidatorDateTime(),
      'st_reingresso_de' => new sfValidatorString(array('max_length' => 1)),
      'dt_ref_de'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('desligamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Desligamentos';
  }


}
