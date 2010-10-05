<?php

/**
 * AnulacoesEmpenhos form base class.
 *
 * @method AnulacoesEmpenhos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnulacoesEmpenhosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputHidden(),
      'dt_versao_orc'            => new sfWidgetFormInputHidden(),
      'cd_orgao'                 => new sfWidgetFormInputHidden(),
      'cd_unid_orc'              => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'            => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'          => new sfWidgetFormInputHidden(),
      'nu_nota_anulacao'         => new sfWidgetFormInputHidden(),
      'dt_ref_ae'                => new sfWidgetFormInputText(),
      'dt_anulacao_ae'           => new sfWidgetFormDateTime(),
      'md_anulacao_ae'           => new sfWidgetFormInputText(),
      'de_historico_anulacao_ae' => new sfWidgetFormInputText(),
      'vl_ant_saldo_dot_ae'      => new sfWidgetFormInputText(),
      'vl_anulacao_ae'           => new sfWidgetFormInputText(),
      'vl_atual_saldo_dot_ae'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorPropelChoice(array('model' => 'AnulacoesEmpenhos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'            => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                 => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'              => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'            => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_nota_anulacao'         => new sfValidatorPropelChoice(array('model' => 'AnulacoesEmpenhos', 'column' => 'nu_nota_anulacao', 'required' => false)),
      'dt_ref_ae'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'dt_anulacao_ae'           => new sfValidatorDateTime(array('required' => false)),
      'md_anulacao_ae'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_historico_anulacao_ae' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_ant_saldo_dot_ae'      => new sfValidatorNumber(array('required' => false)),
      'vl_anulacao_ae'           => new sfValidatorNumber(array('required' => false)),
      'vl_atual_saldo_dot_ae'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('anulacoes_empenhos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnulacoesEmpenhos';
  }


}
