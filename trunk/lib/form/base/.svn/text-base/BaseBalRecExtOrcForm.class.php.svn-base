<?php

/**
 * BalRecExtOrc form base class.
 *
 * @method BalRecExtOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalRecExtOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'nu_seq_brx'             => new sfWidgetFormInputHidden(),
      'dt_ref_brx'             => new sfWidgetFormInputHidden(),
      'tp_balancete_brx'       => new sfWidgetFormInputText(),
      'de_receita_brx'         => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_brx' => new sfWidgetFormInputText(),
      'vl_arrec_no_mes_brx'    => new sfWidgetFormInputText(),
      'vl_arrec_ate_mes_brx'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'BalRecExtOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'nu_seq_brx'             => new sfValidatorPropelChoice(array('model' => 'BalRecExtOrc', 'column' => 'nu_seq_brx', 'required' => false)),
      'dt_ref_brx'             => new sfValidatorPropelChoice(array('model' => 'BalRecExtOrc', 'column' => 'dt_ref_brx', 'required' => false)),
      'tp_balancete_brx'       => new sfValidatorString(array('max_length' => 1)),
      'de_receita_brx'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'vl_anulacao_no_mes_brx' => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_no_mes_brx'    => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_ate_mes_brx'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_rec_ext_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalRecExtOrc';
  }


}
