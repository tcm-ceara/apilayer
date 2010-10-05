<?php

/**
 * NotasEmpenhosDel form base class.
 *
 * @method NotasEmpenhosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasEmpenhosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'          => new sfWidgetFormInputText(),
      'dt_versao_orc'         => new sfWidgetFormInputText(),
      'cd_orgao'              => new sfWidgetFormInputText(),
      'cd_unid_orc'           => new sfWidgetFormInputText(),
      'dt_emissao_ne'         => new sfWidgetFormDateTime(),
      'nu_nota_empenho'       => new sfWidgetFormInputText(),
      'dt_ref_ne'             => new sfWidgetFormInputText(),
      'cd_funcao'             => new sfWidgetFormInputText(),
      'cd_subfuncao'          => new sfWidgetFormInputText(),
      'cd_programa'           => new sfWidgetFormInputText(),
      'cd_proj_ativ'          => new sfWidgetFormInputText(),
      'nu_proj_ativ'          => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ'      => new sfWidgetFormInputText(),
      'cd_elemento_od'        => new sfWidgetFormInputText(),
      'md_nota_empenho'       => new sfWidgetFormInputText(),
      'de_historico_ne1'      => new sfWidgetFormInputText(),
      'de_historico_ne2'      => new sfWidgetFormInputText(),
      'vl_ant_saldo_dot_ne'   => new sfWidgetFormInputText(),
      'vl_empenhado_ne'       => new sfWidgetFormInputText(),
      'vl_atual_saldo_dot_ne' => new sfWidgetFormInputText(),
      'tp_proc_licit_ne'      => new sfWidgetFormInputText(),
      'nu_doc_ng'             => new sfWidgetFormInputText(),
      'st_empenho_ne'         => new sfWidgetFormInputText(),
      'nu_nota_anulacao_ne'   => new sfWidgetFormInputText(),
      'dt_emiss_emp_subst_ne' => new sfWidgetFormDateTime(),
      'nu_emp_subst_ne'       => new sfWidgetFormInputText(),
      'cd_tipo_ng'            => new sfWidgetFormInputText(),
      'nm_negociante_ng'      => new sfWidgetFormInputText(),
      'de_endereco_ng'        => new sfWidgetFormInputText(),
      'nu_fone_ng'            => new sfWidgetFormInputText(),
      'nu_cep_ng'             => new sfWidgetFormInputText(),
      'nm_municipio_ng'       => new sfWidgetFormInputText(),
      'cd_uf_nf'              => new sfWidgetFormInputText(),
      'cd_cpf_gestor'         => new sfWidgetFormInputText(),
      'id'                    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'          => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'              => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'           => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'         => new sfValidatorDateTime(),
      'nu_nota_empenho'       => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_ne'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_funcao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_subfuncao'          => new sfValidatorString(array('max_length' => 3)),
      'cd_programa'           => new sfValidatorString(array('max_length' => 4)),
      'cd_proj_ativ'          => new sfValidatorString(array('max_length' => 1)),
      'nu_proj_ativ'          => new sfValidatorString(array('max_length' => 3)),
      'nu_sub_proj_ativ'      => new sfValidatorString(array('max_length' => 4)),
      'cd_elemento_od'        => new sfValidatorString(array('max_length' => 8)),
      'md_nota_empenho'       => new sfValidatorString(array('max_length' => 1)),
      'de_historico_ne1'      => new sfValidatorString(array('max_length' => 255)),
      'de_historico_ne2'      => new sfValidatorString(array('max_length' => 255)),
      'vl_ant_saldo_dot_ne'   => new sfValidatorNumber(),
      'vl_empenhado_ne'       => new sfValidatorNumber(),
      'vl_atual_saldo_dot_ne' => new sfValidatorNumber(),
      'tp_proc_licit_ne'      => new sfValidatorString(array('max_length' => 1)),
      'nu_doc_ng'             => new sfValidatorString(array('max_length' => 25)),
      'st_empenho_ne'         => new sfValidatorString(array('max_length' => 2)),
      'nu_nota_anulacao_ne'   => new sfValidatorString(array('max_length' => 8)),
      'dt_emiss_emp_subst_ne' => new sfValidatorDateTime(array('required' => false)),
      'nu_emp_subst_ne'       => new sfValidatorString(array('max_length' => 8)),
      'cd_tipo_ng'            => new sfValidatorString(array('max_length' => 1)),
      'nm_negociante_ng'      => new sfValidatorString(array('max_length' => 80)),
      'de_endereco_ng'        => new sfValidatorString(array('max_length' => 255)),
      'nu_fone_ng'            => new sfValidatorString(array('max_length' => 11)),
      'nu_cep_ng'             => new sfValidatorString(array('max_length' => 8)),
      'nm_municipio_ng'       => new sfValidatorString(array('max_length' => 40)),
      'cd_uf_nf'              => new sfValidatorString(array('max_length' => 2)),
      'cd_cpf_gestor'         => new sfValidatorString(array('max_length' => 11)),
      'id'                    => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_empenhos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasEmpenhosDel';
  }


}
