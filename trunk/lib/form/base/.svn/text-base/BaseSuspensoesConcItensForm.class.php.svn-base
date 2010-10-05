<?php

/**
 * SuspensoesConcItens form base class.
 *
 * @method SuspensoesConcItens getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSuspensoesConcItensForm extends BaseFormPropel
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
      'cd_item_ir'       => new sfWidgetFormInputHidden(),
      'nu_expediente_sr' => new sfWidgetFormInputText(),
      'cd_expediente'    => new sfWidgetFormPropelChoice(array('model' => 'TiposExpedientes', 'add_empty' => false)),
      'dt_expediente_sr' => new sfWidgetFormDateTime(),
      'dt_public_sr'     => new sfWidgetFormDateTime(),
      'dt_ref_sr'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni' => new sfValidatorPropelChoice(array('model' => 'SuspensoesConcItens', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'      => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'       => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no' => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'nu_expediente_no', 'required' => false)),
      'cd_item_ir'       => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_item_ir', 'required' => false)),
      'nu_expediente_sr' => new sfValidatorString(array('max_length' => 10)),
      'cd_expediente'    => new sfValidatorPropelChoice(array('model' => 'TiposExpedientes', 'column' => 'cd_expediente')),
      'dt_expediente_sr' => new sfValidatorDateTime(),
      'dt_public_sr'     => new sfValidatorDateTime(),
      'dt_ref_sr'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('suspensoes_conc_itens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SuspensoesConcItens';
  }


}
