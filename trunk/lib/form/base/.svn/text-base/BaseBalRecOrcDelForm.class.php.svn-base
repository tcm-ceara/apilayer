<?php

/**
 * BalRecOrcDel form base class.
 *
 * @method BalRecOrcDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalRecOrcDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputText(),
      'dt_versao_orc'           => new sfWidgetFormInputText(),
      'cd_orgao'                => new sfWidgetFormInputText(),
      'cd_unid_orc'             => new sfWidgetFormInputText(),
      'cd_rubrica_or'           => new sfWidgetFormInputText(),
      'dt_ref_br'               => new sfWidgetFormInputText(),
      'tp_balancete_br'         => new sfWidgetFormInputText(),
      'vl_prev_orc_br'          => new sfWidgetFormInputText(),
      'vl_anulacoes_no_mes_br'  => new sfWidgetFormInputText(),
      'vl_arrec_no_mes_br'      => new sfWidgetFormInputText(),
      'vl_arrec_ate_mes_br'     => new sfWidgetFormInputText(),
      'vl_anulacoes_ate_mes_br' => new sfWidgetFormInputText(),
      'id'                      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'             => new sfValidatorString(array('max_length' => 4)),
      'cd_rubrica_or'           => new sfValidatorString(array('max_length' => 12)),
      'dt_ref_br'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_balancete_br'         => new sfValidatorString(array('max_length' => 1)),
      'vl_prev_orc_br'          => new sfValidatorNumber(),
      'vl_anulacoes_no_mes_br'  => new sfValidatorNumber(),
      'vl_arrec_no_mes_br'      => new sfValidatorNumber(),
      'vl_arrec_ate_mes_br'     => new sfValidatorNumber(),
      'vl_anulacoes_ate_mes_br' => new sfValidatorNumber(),
      'id'                      => new sfValidatorPropelChoice(array('model' => 'BalRecOrcDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_rec_orc_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalRecOrcDel';
  }


}
