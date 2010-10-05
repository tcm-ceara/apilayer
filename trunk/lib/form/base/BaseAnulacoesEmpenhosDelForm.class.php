<?php

/**
 * AnulacoesEmpenhosDel form base class.
 *
 * @method AnulacoesEmpenhosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnulacoesEmpenhosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputText(),
      'dt_versao_orc'            => new sfWidgetFormInputText(),
      'cd_orgao'                 => new sfWidgetFormInputText(),
      'cd_unid_orc'              => new sfWidgetFormInputText(),
      'dt_emissao_ne'            => new sfWidgetFormDateTime(),
      'nu_nota_empenho'          => new sfWidgetFormInputText(),
      'nu_nota_anulacao'         => new sfWidgetFormInputText(),
      'dt_ref_ae'                => new sfWidgetFormInputText(),
      'dt_anulacao_ae'           => new sfWidgetFormDateTime(),
      'md_anulacao_ae'           => new sfWidgetFormInputText(),
      'de_historico_anulacao_ae' => new sfWidgetFormInputText(),
      'vl_ant_saldo_dot_ae'      => new sfWidgetFormInputText(),
      'vl_anulacao_ae'           => new sfWidgetFormInputText(),
      'vl_atual_saldo_dot_ae'    => new sfWidgetFormInputText(),
      'id'                       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                 => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'              => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'            => new sfValidatorDateTime(),
      'nu_nota_empenho'          => new sfValidatorString(array('max_length' => 8)),
      'nu_nota_anulacao'         => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_ae'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_anulacao_ae'           => new sfValidatorDateTime(),
      'md_anulacao_ae'           => new sfValidatorString(array('max_length' => 1)),
      'de_historico_anulacao_ae' => new sfValidatorString(array('max_length' => 255)),
      'vl_ant_saldo_dot_ae'      => new sfValidatorNumber(),
      'vl_anulacao_ae'           => new sfValidatorNumber(),
      'vl_atual_saldo_dot_ae'    => new sfValidatorNumber(),
      'id'                       => new sfValidatorPropelChoice(array('model' => 'AnulacoesEmpenhosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('anulacoes_empenhos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnulacoesEmpenhosDel';
  }


}
