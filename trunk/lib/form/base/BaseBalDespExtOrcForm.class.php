<?php

/**
 * BalDespExtOrc form base class.
 *
 * @method BalDespExtOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalDespExtOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'nu_seq_bdx'             => new sfWidgetFormInputHidden(),
      'dt_ref_bdx'             => new sfWidgetFormInputHidden(),
      'tp_balancete_bdx'       => new sfWidgetFormInputText(),
      'de_despesa_bdx'         => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_bdx' => new sfWidgetFormInputText(),
      'vl_pago_no_mes_bdx'     => new sfWidgetFormInputText(),
      'vl_pago_ate_mes_bdx'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'BalDespExtOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'nu_seq_bdx'             => new sfValidatorPropelChoice(array('model' => 'BalDespExtOrc', 'column' => 'nu_seq_bdx', 'required' => false)),
      'dt_ref_bdx'             => new sfValidatorPropelChoice(array('model' => 'BalDespExtOrc', 'column' => 'dt_ref_bdx', 'required' => false)),
      'tp_balancete_bdx'       => new sfValidatorString(array('max_length' => 1)),
      'de_despesa_bdx'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'vl_anulacao_no_mes_bdx' => new sfValidatorNumber(array('required' => false)),
      'vl_pago_no_mes_bdx'     => new sfValidatorNumber(array('required' => false)),
      'vl_pago_ate_mes_bdx'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_desp_ext_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalDespExtOrc';
  }


}
