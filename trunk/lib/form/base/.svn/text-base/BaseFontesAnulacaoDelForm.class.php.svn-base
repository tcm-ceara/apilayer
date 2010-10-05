<?php

/**
 * FontesAnulacaoDel form base class.
 *
 * @method FontesAnulacaoDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFontesAnulacaoDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputText(),
      'dt_versao_orc'            => new sfWidgetFormInputText(),
      'dt_abert_cred_ca'         => new sfWidgetFormDateTime(),
      'nu_seq_no_dia_ca'         => new sfWidgetFormInputText(),
      'cd_orgao_anul_fa'         => new sfWidgetFormInputText(),
      'cd_unid_orc_anul_fa'      => new sfWidgetFormInputText(),
      'cd_funcao_anul_fa'        => new sfWidgetFormInputText(),
      'cd_subfuncao_anul_fa'     => new sfWidgetFormInputText(),
      'cd_programa_anul_fa'      => new sfWidgetFormInputText(),
      'cd_proj_ativ_anul_fa'     => new sfWidgetFormInputText(),
      'nu_proj_ativ_anul_fa'     => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ_anul_fa' => new sfWidgetFormInputText(),
      'cd_elemento_od_anul_fa'   => new sfWidgetFormInputText(),
      'vl_fonte_anul_fa'         => new sfWidgetFormInputText(),
      'id'                       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_abert_cred_ca'         => new sfValidatorDateTime(),
      'nu_seq_no_dia_ca'         => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_orgao_anul_fa'         => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc_anul_fa'      => new sfValidatorString(array('max_length' => 4)),
      'cd_funcao_anul_fa'        => new sfValidatorString(array('max_length' => 2)),
      'cd_subfuncao_anul_fa'     => new sfValidatorString(array('max_length' => 3)),
      'cd_programa_anul_fa'      => new sfValidatorString(array('max_length' => 4)),
      'cd_proj_ativ_anul_fa'     => new sfValidatorString(array('max_length' => 1)),
      'nu_proj_ativ_anul_fa'     => new sfValidatorString(array('max_length' => 3)),
      'nu_sub_proj_ativ_anul_fa' => new sfValidatorString(array('max_length' => 4)),
      'cd_elemento_od_anul_fa'   => new sfValidatorString(array('max_length' => 8)),
      'vl_fonte_anul_fa'         => new sfValidatorNumber(),
      'id'                       => new sfValidatorPropelChoice(array('model' => 'FontesAnulacaoDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fontes_anulacao_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FontesAnulacaoDel';
  }


}
