<?php

/**
 * LicitacoesBak form base class.
 *
 * @method LicitacoesBak getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLicitacoesBakForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'              => new sfWidgetFormInputText(),
      'dt_realizacao_licit_li'    => new sfWidgetFormDateTime(),
      'nu_licitacao_li'           => new sfWidgetFormInputText(),
      'hr_realizacao_li'          => new sfWidgetFormInputText(),
      'dt_emissao_edital_li'      => new sfWidgetFormDateTime(),
      'md_licitacao_li'           => new sfWidgetFormInputText(),
      'tp_licitacao_li'           => new sfWidgetFormInputText(),
      'de_objeto_licitacao_li1'   => new sfWidgetFormInputText(),
      'de_objeto_licitacao_li2'   => new sfWidgetFormInputText(),
      'vl_orc_estimado_obj_li'    => new sfWidgetFormInputText(),
      'vl_limite_superior_obj_li' => new sfWidgetFormInputText(),
      'cd_cpf_gestor'             => new sfWidgetFormInputText(),
      'dt_criac_comissao_cl'      => new sfWidgetFormDateTime(),
      'nu_comissao_licit_cl'      => new sfWidgetFormInputText(),
      'cd_cpf_resp_homolog_li'    => new sfWidgetFormInputText(),
      'nm_resp_homolog_li'        => new sfWidgetFormInputText(),
      'dt_realizacao_licit_pa'    => new sfWidgetFormDateTime(),
      'md_processo_adm_pa'        => new sfWidgetFormInputText(),
      'cd_cpf_resp_juridico_pa'   => new sfWidgetFormInputText(),
      'nm_resp_juridico_pa'       => new sfWidgetFormInputText(),
      'dt_homologacao_pa'         => new sfWidgetFormDateTime(),
      'de_justifica_preco_pa1'    => new sfWidgetFormInputText(),
      'de_justifica_preco_pa2'    => new sfWidgetFormInputText(),
      'de_motivo_fornec_pa1'      => new sfWidgetFormInputText(),
      'de_motivo_fornec_pa2'      => new sfWidgetFormInputText(),
      'de_fund_legal_pa'          => new sfWidgetFormInputText(),
      'nm_orgao_ata_pa'           => new sfWidgetFormInputText(),
      'id'                        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'              => new sfValidatorString(array('max_length' => 3)),
      'dt_realizacao_licit_li'    => new sfValidatorDateTime(),
      'nu_licitacao_li'           => new sfValidatorString(array('max_length' => 15)),
      'hr_realizacao_li'          => new sfValidatorString(array('max_length' => 5)),
      'dt_emissao_edital_li'      => new sfValidatorDateTime(),
      'md_licitacao_li'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'tp_licitacao_li'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_objeto_licitacao_li1'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_objeto_licitacao_li2'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_orc_estimado_obj_li'    => new sfValidatorNumber(array('required' => false)),
      'vl_limite_superior_obj_li' => new sfValidatorNumber(array('required' => false)),
      'cd_cpf_gestor'             => new sfValidatorString(array('max_length' => 11)),
      'dt_criac_comissao_cl'      => new sfValidatorDateTime(),
      'nu_comissao_licit_cl'      => new sfValidatorString(array('max_length' => 2)),
      'cd_cpf_resp_homolog_li'    => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_resp_homolog_li'        => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'dt_realizacao_licit_pa'    => new sfValidatorDateTime(array('required' => false)),
      'md_processo_adm_pa'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_cpf_resp_juridico_pa'   => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_resp_juridico_pa'       => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'dt_homologacao_pa'         => new sfValidatorDateTime(array('required' => false)),
      'de_justifica_preco_pa1'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_justifica_preco_pa2'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_motivo_fornec_pa1'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_motivo_fornec_pa2'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_fund_legal_pa'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nm_orgao_ata_pa'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'                        => new sfValidatorPropelChoice(array('model' => 'LicitacoesBak', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('licitacoes_bak[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LicitacoesBak';
  }


}
