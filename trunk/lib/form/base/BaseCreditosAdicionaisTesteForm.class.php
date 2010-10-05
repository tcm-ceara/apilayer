<?php

/**
 * CreditosAdicionaisTeste form base class.
 *
 * @method CreditosAdicionaisTeste getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCreditosAdicionaisTesteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'dt_abert_cred_ca'       => new sfWidgetFormInputHidden(),
      'nu_seq_no_dia_ca'       => new sfWidgetFormInputHidden(),
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
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionaisTeste', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionaisTeste', 'column' => 'dt_versao_orc', 'required' => false)),
      'dt_abert_cred_ca'       => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionaisTeste', 'column' => 'dt_abert_cred_ca', 'required' => false)),
      'nu_seq_no_dia_ca'       => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionaisTeste', 'column' => 'nu_seq_no_dia_ca', 'required' => false)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_funcao'              => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_subfuncao'           => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cd_programa'            => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_proj_ativ'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nu_proj_ativ'           => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nu_sub_proj_ativ'       => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_elemento_od'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'dt_ref_ca'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nu_lei_ca'              => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_decreto_ca'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tp_abertura_credito_ca' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_fonte_recursos_ca'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'vl_cred_super_ca'       => new sfValidatorNumber(array('required' => false)),
      'vl_cred_exces_ca'       => new sfValidatorNumber(array('required' => false)),
      'vl_cred_oper_ca'        => new sfValidatorNumber(array('required' => false)),
      'vl_cred_anul_ca'        => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('creditos_adicionais_teste[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CreditosAdicionaisTeste';
  }


}
