<?php

/**
 * AgentesFolhasDel form base class.
 *
 * @method AgentesFolhasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAgentesFolhasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputText(),
      'dt_versao_orc'       => new sfWidgetFormInputText(),
      'cd_orgao'            => new sfWidgetFormInputText(),
      'cd_unid_orc'         => new sfWidgetFormInputText(),
      'dt_compet_fl'        => new sfWidgetFormInputText(),
      'tp_folha'            => new sfWidgetFormInputText(),
      'dt_emissao_fl'       => new sfWidgetFormDateTime(),
      'cd_cpf_serv_muni'    => new sfWidgetFormInputText(),
      'cd_ingresso'         => new sfWidgetFormInputText(),
      'cd_vinculo'          => new sfWidgetFormInputText(),
      'nu_expediente_no'    => new sfWidgetFormInputText(),
      'cd_item_ir'          => new sfWidgetFormInputText(),
      'vl_item_af'          => new sfWidgetFormInputText(),
      'tp_classificacao_af' => new sfWidgetFormInputText(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'            => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'         => new sfValidatorString(array('max_length' => 4)),
      'dt_compet_fl'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_folha'            => new sfValidatorString(array('max_length' => 2)),
      'dt_emissao_fl'       => new sfValidatorDateTime(),
      'cd_cpf_serv_muni'    => new sfValidatorString(array('max_length' => 11)),
      'cd_ingresso'         => new sfValidatorString(array('max_length' => 1)),
      'cd_vinculo'          => new sfValidatorString(array('max_length' => 1)),
      'nu_expediente_no'    => new sfValidatorString(array('max_length' => 10)),
      'cd_item_ir'          => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'vl_item_af'          => new sfValidatorNumber(),
      'tp_classificacao_af' => new sfValidatorString(array('max_length' => 1)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'AgentesFolhasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agentes_folhas_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AgentesFolhasDel';
  }


}
