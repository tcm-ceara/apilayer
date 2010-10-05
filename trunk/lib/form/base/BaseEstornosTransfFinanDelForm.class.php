<?php

/**
 * EstornosTransfFinanDel form base class.
 *
 * @method EstornosTransfFinanDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstornosTransfFinanDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputText(),
      'dt_transf_et'       => new sfWidgetFormDateTime(),
      'nu_seq_transf_et'   => new sfWidgetFormInputText(),
      'tp_transf_et'       => new sfWidgetFormInputText(),
      'nu_banco_ori_et'    => new sfWidgetFormInputText(),
      'nu_agencia_ori_et'  => new sfWidgetFormInputText(),
      'nu_conta_ori_et'    => new sfWidgetFormInputText(),
      'nu_doc_banc_et'     => new sfWidgetFormInputText(),
      'nu_banco_dest_et'   => new sfWidgetFormInputText(),
      'nu_agencia_dest_et' => new sfWidgetFormInputText(),
      'nu_conta_dest_et'   => new sfWidgetFormInputText(),
      'vl_valor_et'        => new sfWidgetFormInputText(),
      'de_motivo_et'       => new sfWidgetFormInputText(),
      'tp_doc_bancaixa_et' => new sfWidgetFormInputText(),
      'id'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorString(array('max_length' => 3)),
      'dt_transf_et'       => new sfValidatorDateTime(),
      'nu_seq_transf_et'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_transf_et'       => new sfValidatorString(array('max_length' => 1)),
      'nu_banco_ori_et'    => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_ori_et'  => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_ori_et'    => new sfValidatorString(array('max_length' => 10)),
      'nu_doc_banc_et'     => new sfValidatorString(array('max_length' => 20)),
      'nu_banco_dest_et'   => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_dest_et' => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_dest_et'   => new sfValidatorString(array('max_length' => 10)),
      'vl_valor_et'        => new sfValidatorNumber(),
      'de_motivo_et'       => new sfValidatorString(array('max_length' => 255)),
      'tp_doc_bancaixa_et' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinanDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estornos_transf_finan_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstornosTransfFinanDel';
  }


}
