<?php

/**
 * BalRecExtOrcComdup052006 form base class.
 *
 * @method BalRecExtOrcComdup052006 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBalRecExtOrcComdup052006Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'nu_seq_brx'             => new sfWidgetFormInputText(),
      'dt_ref_brx'             => new sfWidgetFormInputText(),
      'tp_balancete_brx'       => new sfWidgetFormInputText(),
      'de_receita_brx'         => new sfWidgetFormInputText(),
      'vl_anulacao_no_mes_brx' => new sfWidgetFormInputText(),
      'vl_arrec_no_mes_brx'    => new sfWidgetFormInputText(),
      'vl_arrec_ate_mes_brx'   => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'nu_seq_brx'             => new sfValidatorString(array('max_length' => 3)),
      'dt_ref_brx'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_balancete_brx'       => new sfValidatorString(array('max_length' => 1)),
      'de_receita_brx'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'vl_anulacao_no_mes_brx' => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_no_mes_brx'    => new sfValidatorNumber(array('required' => false)),
      'vl_arrec_ate_mes_brx'   => new sfValidatorNumber(array('required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'BalRecExtOrcComdup052006', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bal_rec_ext_orc_comdup052006[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BalRecExtOrcComdup052006';
  }


}
