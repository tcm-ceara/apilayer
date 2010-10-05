<?php

/**
 * AgentesFolhas form base class.
 *
 * @method AgentesFolhas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAgentesFolhasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'dt_compet_fl'        => new sfWidgetFormInputHidden(),
      'tp_folha'            => new sfWidgetFormInputHidden(),
      'dt_emissao_fl'       => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'    => new sfWidgetFormInputHidden(),
      'cd_ingresso'         => new sfWidgetFormInputHidden(),
      'cd_vinculo'          => new sfWidgetFormInputHidden(),
      'nu_expediente_no'    => new sfWidgetFormInputHidden(),
      'cd_item_ir'          => new sfWidgetFormInputHidden(),
      'vl_item_af'          => new sfWidgetFormInputText(),
      'tp_classificacao_af' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_compet_fl'        => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentos', 'column' => 'dt_compet_fl', 'required' => false)),
      'tp_folha'            => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentos', 'column' => 'tp_folha', 'required' => false)),
      'dt_emissao_fl'       => new sfValidatorPropelChoice(array('model' => 'FolhasPagamentos', 'column' => 'dt_emissao_fl', 'required' => false)),
      'cd_cpf_serv_muni'    => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'         => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'          => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no'    => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'nu_expediente_no', 'required' => false)),
      'cd_item_ir'          => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_item_ir', 'required' => false)),
      'vl_item_af'          => new sfValidatorNumber(),
      'tp_classificacao_af' => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('agentes_folhas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AgentesFolhas';
  }


}
