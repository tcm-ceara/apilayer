<?php

/**
 * CreditosAdicionaisDel form base class.
 *
 * @method CreditosAdicionaisDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCreditosAdicionaisDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'dt_abert_cred_ca'       => new sfWidgetFormDateTime(),
      'nu_seq_no_dia_ca'       => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'cd_funcao'              => new sfWidgetFormInputText(),
      'cd_subfuncao'           => new sfWidgetFormInputText(),
      'cd_programa'            => new sfWidgetFormInputText(),
      'cd_proj_ativ'           => new sfWidgetFormInputText(),
      'nu_proj_ativ'           => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ'       => new sfWidgetFormInputText(),
      'cd_elemento_od'         => new sfWidgetFormInputText(),
      'dt_ref_ca'              => new sfWidgetFormInputText(),
      'nu_lei_ca'              => new sfWidgetFormInputText(),
      'nu_decreto_ca'          => new sfWidgetFormInputText(),
      'tp_abertura_credito_ca' => new sfWidgetFormInputText(),
      'cd_fonte_recursos_ca'   => new sfWidgetFormInputText(),
      'vl_cred_super_ca'       => new sfWidgetFormInputText(),
      'vl_cred_exces_ca'       => new sfWidgetFormInputText(),
      'vl_cred_oper_ca'        => new sfWidgetFormInputText(),
      'vl_cred_anul_ca'        => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_abert_cred_ca'       => new sfValidatorDateTime(),
      'nu_seq_no_dia_ca'       => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'cd_funcao'              => new sfValidatorString(array('max_length' => 2)),
      'cd_subfuncao'           => new sfValidatorString(array('max_length' => 3)),
      'cd_programa'            => new sfValidatorString(array('max_length' => 4)),
      'cd_proj_ativ'           => new sfValidatorString(array('max_length' => 1)),
      'nu_proj_ativ'           => new sfValidatorString(array('max_length' => 3)),
      'nu_sub_proj_ativ'       => new sfValidatorString(array('max_length' => 4)),
      'cd_elemento_od'         => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_ca'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_lei_ca'              => new sfValidatorString(array('max_length' => 10)),
      'nu_decreto_ca'          => new sfValidatorString(array('max_length' => 10)),
      'tp_abertura_credito_ca' => new sfValidatorString(array('max_length' => 1)),
      'cd_fonte_recursos_ca'   => new sfValidatorString(array('max_length' => 4)),
      'vl_cred_super_ca'       => new sfValidatorNumber(),
      'vl_cred_exces_ca'       => new sfValidatorNumber(),
      'vl_cred_oper_ca'        => new sfValidatorNumber(),
      'vl_cred_anul_ca'        => new sfValidatorNumber(),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionaisDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('creditos_adicionais_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CreditosAdicionaisDel';
  }


}
