<?php

/**
 * OrcDespProjAtivTcm15092009 form base class.
 *
 * @method OrcDespProjAtivTcm15092009 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcDespProjAtivTcm15092009Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'cd_funcao'            => new sfWidgetFormInputText(),
      'cd_subfuncao'         => new sfWidgetFormInputText(),
      'cd_programa'          => new sfWidgetFormInputText(),
      'cd_proj_ativ'         => new sfWidgetFormInputText(),
      'nu_proj_ativ'         => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ'     => new sfWidgetFormInputText(),
      'cd_tipo_orcamento'    => new sfWidgetFormInputText(),
      'nm_proj_ativ'         => new sfWidgetFormInputText(),
      'de_proj_ativ'         => new sfWidgetFormInputText(),
      'vl_tot_fix_proj_ativ' => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4)),
      'cd_funcao'            => new sfValidatorString(array('max_length' => 2)),
      'cd_subfuncao'         => new sfValidatorString(array('max_length' => 3)),
      'cd_programa'          => new sfValidatorString(array('max_length' => 4)),
      'cd_proj_ativ'         => new sfValidatorString(array('max_length' => 1)),
      'nu_proj_ativ'         => new sfValidatorString(array('max_length' => 3)),
      'nu_sub_proj_ativ'     => new sfValidatorString(array('max_length' => 4)),
      'cd_tipo_orcamento'    => new sfValidatorString(array('max_length' => 1)),
      'nm_proj_ativ'         => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'de_proj_ativ'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_tot_fix_proj_ativ' => new sfValidatorNumber(array('required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtivTcm15092009', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orc_desp_proj_ativ_tcm15092009[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrcDespProjAtivTcm15092009';
  }


}
