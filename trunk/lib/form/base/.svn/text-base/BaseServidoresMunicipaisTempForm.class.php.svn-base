<?php

/**
 * ServidoresMunicipaisTemp form base class.
 *
 * @method ServidoresMunicipaisTemp getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseServidoresMunicipaisTempForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormPropelChoice(array('model' => 'UnidadesOrcamentarias', 'add_empty' => false)),
      'dt_versao_orc'        => new sfWidgetFormPropelChoice(array('model' => 'UnidadesOrcamentarias', 'add_empty' => false)),
      'cd_orgao'             => new sfWidgetFormPropelChoice(array('model' => 'UnidadesOrcamentarias', 'add_empty' => false)),
      'cd_unid_orc'          => new sfWidgetFormPropelChoice(array('model' => 'UnidadesOrcamentarias', 'add_empty' => false)),
      'cd_cpf_serv_muni'     => new sfWidgetFormInputText(),
      'nu_matric_muni_sm'    => new sfWidgetFormInputText(),
      'cd_sit_funcional'     => new sfWidgetFormPropelChoice(array('model' => 'SitFuncionais', 'add_empty' => true)),
      'cd_vinculo'           => new sfWidgetFormPropelChoice(array('model' => 'Vinculos', 'add_empty' => true)),
      'cd_ocup_cbo'          => new sfWidgetFormInputText(),
      'nu_ato_nomeacao_sm'   => new sfWidgetFormInputText(),
      'dt_ato_nomeacao_sm'   => new sfWidgetFormDateTime(),
      'dt_posse_sm'          => new sfWidgetFormDateTime(),
      'dt_demissao_sm'       => new sfWidgetFormDateTime(),
      'de_simb_carg_com_sm'  => new sfWidgetFormInputText(),
      'de_denom_carg_com_sm' => new sfWidgetFormInputText(),
      'nu_ato_nom_comis_sm'  => new sfWidgetFormInputText(),
      'dt_ato_nom_comis_sm'  => new sfWidgetFormDateTime(),
      'nu_identidade_ds'     => new sfWidgetFormInputText(),
      'de_exped_ident_ds'    => new sfWidgetFormInputText(),
      'nu_tit_eleitor_ds'    => new sfWidgetFormInputText(),
      'cd_est_civil'         => new sfWidgetFormInputText(),
      'cd_instrucao'         => new sfWidgetFormPropelChoice(array('model' => 'GrausInstrucao', 'add_empty' => true)),
      'cd_sexo_ds'           => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'      => new sfWidgetFormInputText(),
      'de_endereco_ds'       => new sfWidgetFormInputText(),
      'nu_fone_ds'           => new sfWidgetFormInputText(),
      'dt_nascim_ds'         => new sfWidgetFormDateTime(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_municipio')),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc')),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao')),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc')),
      'cd_cpf_serv_muni'     => new sfValidatorString(array('max_length' => 11)),
      'nu_matric_muni_sm'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cd_sit_funcional'     => new sfValidatorPropelChoice(array('model' => 'SitFuncionais', 'column' => 'cd_sit_funcional', 'required' => false)),
      'cd_vinculo'           => new sfValidatorPropelChoice(array('model' => 'Vinculos', 'column' => 'cd_vinculo', 'required' => false)),
      'cd_ocup_cbo'          => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nu_ato_nomeacao_sm'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'dt_ato_nomeacao_sm'   => new sfValidatorDateTime(array('required' => false)),
      'dt_posse_sm'          => new sfValidatorDateTime(array('required' => false)),
      'dt_demissao_sm'       => new sfValidatorDateTime(array('required' => false)),
      'de_simb_carg_com_sm'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'de_denom_carg_com_sm' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nu_ato_nom_comis_sm'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'dt_ato_nom_comis_sm'  => new sfValidatorDateTime(array('required' => false)),
      'nu_identidade_ds'     => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'de_exped_ident_ds'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_tit_eleitor_ds'    => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'cd_est_civil'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_instrucao'         => new sfValidatorPropelChoice(array('model' => 'GrausInstrucao', 'column' => 'cd_instrucao', 'required' => false)),
      'cd_sexo_ds'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_serv_muni_ds'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_endereco_ds'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ds'           => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_nascim_ds'         => new sfValidatorDateTime(array('required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'ServidoresMunicipaisTemp', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servidores_municipais_temp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServidoresMunicipaisTemp';
  }


}
