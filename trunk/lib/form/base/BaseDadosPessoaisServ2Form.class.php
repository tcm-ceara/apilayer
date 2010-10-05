<?php

/**
 * DadosPessoaisServ2 form base class.
 *
 * @method DadosPessoaisServ2 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosPessoaisServ2Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'dt_versao_orc'     => new sfWidgetFormInputHidden(),
      'cd_orgao'          => new sfWidgetFormInputHidden(),
      'cd_unid_orc'       => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'  => new sfWidgetFormInputHidden(),
      'nu_identidade_ds'  => new sfWidgetFormInputText(),
      'de_exped_ident_ds' => new sfWidgetFormInputText(),
      'nu_tit_eleitor_ds' => new sfWidgetFormInputText(),
      'cd_est_civil'      => new sfWidgetFormPropelChoice(array('model' => 'EstadosCivis', 'add_empty' => true)),
      'cd_instrucao'      => new sfWidgetFormPropelChoice(array('model' => 'GrausInstrucao', 'add_empty' => true)),
      'cd_sexo_ds'        => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'   => new sfWidgetFormInputText(),
      'de_endereco_ds'    => new sfWidgetFormInputText(),
      'nu_fone_ds'        => new sfWidgetFormInputText(),
      'dt_nascim_ds'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'ServidoresMunicipais', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'ServidoresMunicipais', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'ServidoresMunicipais', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'ServidoresMunicipais', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'  => new sfValidatorPropelChoice(array('model' => 'DadosPessoaisServ2', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'nu_identidade_ds'  => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'de_exped_ident_ds' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_tit_eleitor_ds' => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'cd_est_civil'      => new sfValidatorPropelChoice(array('model' => 'EstadosCivis', 'column' => 'cd_est_civil', 'required' => false)),
      'cd_instrucao'      => new sfValidatorPropelChoice(array('model' => 'GrausInstrucao', 'column' => 'cd_instrucao', 'required' => false)),
      'cd_sexo_ds'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_serv_muni_ds'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_endereco_ds'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ds'        => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_nascim_ds'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_pessoais_serv2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosPessoaisServ2';
  }


}
