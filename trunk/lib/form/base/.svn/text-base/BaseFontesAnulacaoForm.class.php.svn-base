<?php

/**
 * FontesAnulacao form base class.
 *
 * @method FontesAnulacao getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFontesAnulacaoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputHidden(),
      'dt_versao_orc'            => new sfWidgetFormInputHidden(),
      'dt_abert_cred_ca'         => new sfWidgetFormInputHidden(),
      'nu_seq_no_dia_ca'         => new sfWidgetFormInputHidden(),
      'cd_orgao_anul_fa'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc_anul_fa'      => new sfWidgetFormInputHidden(),
      'cd_funcao_anul_fa'        => new sfWidgetFormInputHidden(),
      'cd_subfuncao_anul_fa'     => new sfWidgetFormInputHidden(),
      'cd_programa_anul_fa'      => new sfWidgetFormInputHidden(),
      'cd_proj_ativ_anul_fa'     => new sfWidgetFormInputHidden(),
      'nu_proj_ativ_anul_fa'     => new sfWidgetFormInputHidden(),
      'nu_sub_proj_ativ_anul_fa' => new sfWidgetFormInputHidden(),
      'cd_elemento_od_anul_fa'   => new sfWidgetFormInputHidden(),
      'vl_fonte_anul_fa'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'dt_abert_cred_ca'         => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionais', 'column' => 'dt_abert_cred_ca', 'required' => false)),
      'nu_seq_no_dia_ca'         => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionais', 'column' => 'nu_seq_no_dia_ca', 'required' => false)),
      'cd_orgao_anul_fa'         => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc_anul_fa'      => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao_anul_fa'        => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao_anul_fa'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa_anul_fa'      => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ_anul_fa'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ_anul_fa'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ_anul_fa' => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_elemento_od_anul_fa'   => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_elemento_od', 'required' => false)),
      'vl_fonte_anul_fa'         => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('fontes_anulacao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FontesAnulacao';
  }


}
