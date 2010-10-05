<?php

/**
 * BalDespExtOrcDel form base class.
 *
 * @method BalDespExtOrcDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalDespExtOrcDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'nu_seq_bdx'             => new sfWidgetFormInputText(),
      'dt_ref_bdx'             => new sfWidgetFormInputText(),
      'tp_balancete_bdx'       => new sfWidgetFormInputText(),
      'de_despesa_bdx'         => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_bdx' => new sfWidgetFormInputText(),
      'vl_pago_no_mes_bdx'     => new sfWidgetFormInputText(),
      'vl_pago_ate_mes_bdx'    => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'nu_seq_bdx'             => new sfValidatorString(array('max_length' => 3)),
      'dt_ref_bdx'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_balancete_bdx'       => new sfValidatorString(array('max_length' => 1)),
      'de_despesa_bdx'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'vl_anulacao_no_mes_bdx' => new sfValidatorNumber(array('required' => false)),
      'vl_pago_no_mes_bdx'     => new sfValidatorNumber(array('required' => false)),
      'vl_pago_ate_mes_bdx'    => new sfValidatorNumber(array('required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'BalDespExtOrcDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_desp_ext_orc_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalDespExtOrcDel';
  }


}
