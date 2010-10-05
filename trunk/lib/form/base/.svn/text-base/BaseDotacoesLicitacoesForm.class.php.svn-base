<?php

/**
 * DotacoesLicitacoes form base class.
 *
 * @method DotacoesLicitacoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDotacoesLicitacoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_realizacao_licit_li' => new sfWidgetFormInputHidden(),
      'nu_licitacao_li'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'cd_funcao'              => new sfWidgetFormInputHidden(),
      'cd_subfuncao'           => new sfWidgetFormInputHidden(),
      'cd_programa'            => new sfWidgetFormInputHidden(),
      'cd_proj_ativ'           => new sfWidgetFormInputHidden(),
      'nu_proj_ativ'           => new sfWidgetFormInputHidden(),
      'nu_sub_proj_ativ'       => new sfWidgetFormInputHidden(),
      'cd_elemento_od'         => new sfWidgetFormInputHidden(),
      'vl_dotacao_dl'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_realizacao_licit_li' => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'dt_realizacao_licit_li', 'required' => false)),
      'nu_licitacao_li'        => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'nu_licitacao_li', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao'              => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ'       => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_elemento_od'         => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_elemento_od', 'required' => false)),
      'vl_dotacao_dl'          => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('dotacoes_licitacoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DotacoesLicitacoes';
  }


}
