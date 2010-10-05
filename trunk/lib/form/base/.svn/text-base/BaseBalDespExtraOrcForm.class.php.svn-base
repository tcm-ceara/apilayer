<?php

/**
 * BalDespExtraOrc form base class.
 *
 * @method BalDespExtraOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalDespExtraOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'cd_orgao'                => new sfWidgetFormInputHidden(),
      'cd_unid_orc'             => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'            => new sfWidgetFormInputHidden(),
      'dt_ref_bde'              => new sfWidgetFormInputHidden(),
      'tp_balancete_bde'        => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_bde'  => new sfWidgetFormInputText(),
      'vl_anulacao_ate_mes_bde' => new sfWidgetFormInputText(),
      'vl_pago_no_mes_bde'      => new sfWidgetFormInputText(),
      'vl_pago_ate_mes_bde'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'            => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'dt_ref_bde'              => new sfValidatorPropelChoice(array('model' => 'BalDespExtraOrc', 'column' => 'dt_ref_bde', 'required' => false)),
      'tp_balancete_bde'        => new sfValidatorString(array('max_length' => 1)),
      'vl_anulacao_no_mes_bde'  => new sfValidatorNumber(array('required' => false)),
      'vl_anulacao_ate_mes_bde' => new sfValidatorNumber(array('required' => false)),
      'vl_pago_no_mes_bde'      => new sfValidatorNumber(array('required' => false)),
      'vl_pago_ate_mes_bde'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_desp_extra_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalDespExtraOrc';
  }


}
