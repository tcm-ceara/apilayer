<?php

/**
 * RespEngenObras form base class.
 *
 * @method RespEngenObras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRespEngenObrasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputHidden(),
      'dt_ini_obra_srv'    => new sfWidgetFormInputHidden(),
      'tp_obra_srv'        => new sfWidgetFormInputHidden(),
      'nu_obra_srv'        => new sfWidgetFormInputHidden(),
      'nu_rg_crea_eng'     => new sfWidgetFormInputHidden(),
      'dt_ini_resp_eng_ob' => new sfWidgetFormInputHidden(),
      'dt_fim_resp_eng_ob' => new sfWidgetFormDateTime(),
      'nm_engenheiro_eng'  => new sfWidgetFormInputText(),
      'cd_cpf_eng'         => new sfWidgetFormInputText(),
      'nu_cgc_empresa_ee'  => new sfWidgetFormInputText(),
      'nm_empresa_ee'      => new sfWidgetFormInputText(),
      'nu_rg_crea_ee'      => new sfWidgetFormInputText(),
      'nu_fone_ee'         => new sfWidgetFormInputText(),
      'de_ender_ee'        => new sfWidgetFormInputText(),
      'nu_cep_ee'          => new sfWidgetFormInputText(),
      'nm_municipio_ee'    => new sfWidgetFormInputText(),
      'cd_uf_ee'           => new sfWidgetFormPropelChoice(array('model' => 'UnidadesFederacao', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'cd_municipio', 'required' => false)),
      'dt_ini_obra_srv'    => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'dt_ini_obra_srv', 'required' => false)),
      'tp_obra_srv'        => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'tp_obra_srv', 'required' => false)),
      'nu_obra_srv'        => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'nu_obra_srv', 'required' => false)),
      'nu_rg_crea_eng'     => new sfValidatorPropelChoice(array('model' => 'Engenheiros', 'column' => 'nu_rg_crea_eng', 'required' => false)),
      'dt_ini_resp_eng_ob' => new sfValidatorPropelChoice(array('model' => 'RespEngenObras', 'column' => 'dt_ini_resp_eng_ob', 'required' => false)),
      'dt_fim_resp_eng_ob' => new sfValidatorDateTime(array('required' => false)),
      'nm_engenheiro_eng'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cd_cpf_eng'         => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_cgc_empresa_ee'  => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'nm_empresa_ee'      => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'nu_rg_crea_ee'      => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nu_fone_ee'         => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_ender_ee'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_ee'          => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ee'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'cd_uf_ee'           => new sfValidatorPropelChoice(array('model' => 'UnidadesFederacao', 'column' => 'cd_sigla_uf', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resp_engen_obras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RespEngenObras';
  }


}
