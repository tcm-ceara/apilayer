<?php

/**
 * DotacoesLicitacoesDel form base class.
 *
 * @method DotacoesLicitacoesDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDotacoesLicitacoesDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_realizacao_licit_li' => new sfWidgetFormDateTime(),
      'nu_licitacao_li'        => new sfWidgetFormInputText(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'cd_funcao'              => new sfWidgetFormInputText(),
      'cd_subfuncao'           => new sfWidgetFormInputText(),
      'cd_programa'            => new sfWidgetFormInputText(),
      'cd_proj_ativ'           => new sfWidgetFormInputText(),
      'nu_proj_ativ'           => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ'       => new sfWidgetFormInputText(),
      'cd_elemento_od'         => new sfWidgetFormInputText(),
      'vl_dotacao_dl'          => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_realizacao_licit_li' => new sfValidatorDateTime(),
      'nu_licitacao_li'        => new sfValidatorString(array('max_length' => 15)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'cd_funcao'              => new sfValidatorString(array('max_length' => 2)),
      'cd_subfuncao'           => new sfValidatorString(array('max_length' => 3)),
      'cd_programa'            => new sfValidatorString(array('max_length' => 4)),
      'cd_proj_ativ'           => new sfValidatorString(array('max_length' => 1)),
      'nu_proj_ativ'           => new sfValidatorString(array('max_length' => 3)),
      'nu_sub_proj_ativ'       => new sfValidatorString(array('max_length' => 4)),
      'cd_elemento_od'         => new sfValidatorString(array('max_length' => 8)),
      'vl_dotacao_dl'          => new sfValidatorNumber(),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'DotacoesLicitacoesDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dotacoes_licitacoes_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DotacoesLicitacoesDel';
  }


}
