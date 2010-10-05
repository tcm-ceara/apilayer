<?php

/**
 * ServidoresMunicipaisDel form base class.
 *
 * @method ServidoresMunicipaisDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseServidoresMunicipaisDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni'     => new sfWidgetFormInputText(),
      'nu_matric_muni_sm'    => new sfWidgetFormInputText(),
      'cd_sit_funcional'     => new sfWidgetFormInputText(),
      'cd_vinculo'           => new sfWidgetFormInputText(),
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
      'cd_instrucao'         => new sfWidgetFormInputText(),
      'cd_sexo_ds'           => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'      => new sfWidgetFormInputText(),
      'de_endereco_ds'       => new sfWidgetFormInputText(),
      'nu_fone_ds'           => new sfWidgetFormInputText(),
      'dt_nascim_ds'         => new sfWidgetFormDateTime(),
      'cd_ingresso_fi'       => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_cpf_serv_muni'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_matric_muni_sm'    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cd_sit_funcional'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_vinculo'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
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
      'cd_instrucao'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_sexo_ds'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_serv_muni_ds'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_endereco_ds'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ds'           => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_nascim_ds'         => new sfValidatorDateTime(array('required' => false)),
      'cd_ingresso_fi'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'ServidoresMunicipaisDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servidores_municipais_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServidoresMunicipaisDel';
  }


}
