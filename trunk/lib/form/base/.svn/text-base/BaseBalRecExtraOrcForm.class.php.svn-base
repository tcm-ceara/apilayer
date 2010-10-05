<?php

/**
 * BalRecExtraOrc form base class.
 *
 * @method BalRecExtraOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalRecExtraOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'cd_orgao'                => new sfWidgetFormInputHidden(),
      'cd_unid_orc'             => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'            => new sfWidgetFormInputHidden(),
      'dt_ref_bre'              => new sfWidgetFormInputHidden(),
      'tp_balancete_bre'        => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_bre'  => new sfWidgetFormInputText(),
      'vl_anulacao_ate_mes_bre' => new sfWidgetFormInputText(),
      'vl_arrec_no_mes_bre'     => new sfWidgetFormInputText(),
      'vl_arrec_ate_mes_bre'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'            => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'dt_ref_bre'              => new sfValidatorPropelChoice(array('model' => 'BalRecExtraOrc', 'column' => 'dt_ref_bre', 'required' => false)),
      'tp_balancete_bre'        => new sfValidatorString(array('max_length' => 1)),
      'vl_anulacao_no_mes_bre'  => new sfValidatorNumber(array('required' => false)),
      'vl_anulacao_ate_mes_bre' => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_no_mes_bre'     => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_ate_mes_bre'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_rec_extra_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalRecExtraOrc';
  }


}
