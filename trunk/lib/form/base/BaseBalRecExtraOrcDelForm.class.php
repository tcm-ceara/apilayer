<?php

/**
 * BalRecExtraOrcDel form base class.
 *
 * @method BalRecExtraOrcDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalRecExtraOrcDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputText(),
      'dt_versao_orc'           => new sfWidgetFormInputText(),
      'cd_orgao'                => new sfWidgetFormInputText(),
      'cd_unid_orc'             => new sfWidgetFormInputText(),
      'cd_conta_ctx'            => new sfWidgetFormInputText(),
      'dt_ref_bre'              => new sfWidgetFormInputText(),
      'tp_balancete_bre'        => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_bre'  => new sfWidgetFormInputText(),
      'vl_anulacao_ate_mes_bre' => new sfWidgetFormInputText(),
      'vl_arrec_no_mes_bre'     => new sfWidgetFormInputText(),
      'vl_arrec_ate_mes_bre'    => new sfWidgetFormInputText(),
      'id'                      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'             => new sfValidatorString(array('max_length' => 4)),
      'cd_conta_ctx'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_ref_bre'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_balancete_bre'        => new sfValidatorString(array('max_length' => 1)),
      'vl_anulacao_no_mes_bre'  => new sfValidatorNumber(),
      'vl_anulacao_ate_mes_bre' => new sfValidatorNumber(),
      'vl_arrec_no_mes_bre'     => new sfValidatorNumber(),
      'vl_arrec_ate_mes_bre'    => new sfValidatorNumber(),
      'id'                      => new sfValidatorPropelChoice(array('model' => 'BalRecExtraOrcDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_rec_extra_orc_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalRecExtraOrcDel';
  }


}
