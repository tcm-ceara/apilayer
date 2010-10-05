<?php

/**
 * BalRecOrc form base class.
 *
 * @method BalRecOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalRecOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'cd_orgao'                => new sfWidgetFormInputHidden(),
      'cd_unid_orc'             => new sfWidgetFormInputHidden(),
      'cd_rubrica_or'           => new sfWidgetFormInputHidden(),
      'dt_ref_br'               => new sfWidgetFormInputHidden(),
      'tp_balancete_br'         => new sfWidgetFormInputText(),
      'vl_prev_orc_br'          => new sfWidgetFormInputText(),
      'vl_anulacoes_no_mes_br'  => new sfWidgetFormInputText(),
      'vl_arrec_no_mes_br'      => new sfWidgetFormInputText(),
      'vl_arrec_ate_mes_br'     => new sfWidgetFormInputText(),
      'vl_anulacoes_ate_mes_br' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'BalRecOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_rubrica_or'           => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_rubrica_or', 'required' => false)),
      'dt_ref_br'               => new sfValidatorPropelChoice(array('model' => 'BalRecOrc', 'column' => 'dt_ref_br', 'required' => false)),
      'tp_balancete_br'         => new sfValidatorString(array('max_length' => 1)),
      'vl_prev_orc_br'          => new sfValidatorNumber(array('required' => false)),
      'vl_anulacoes_no_mes_br'  => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_no_mes_br'      => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_ate_mes_br'     => new sfValidatorNumber(array('required' => false)),
      'vl_anulacoes_ate_mes_br' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_rec_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalRecOrc';
  }


}
