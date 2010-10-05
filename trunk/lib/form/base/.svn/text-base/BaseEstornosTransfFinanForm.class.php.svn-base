<?php

/**
 * EstornosTransfFinan form base class.
 *
 * @method EstornosTransfFinan getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstornosTransfFinanForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputHidden(),
      'dt_transf_et'       => new sfWidgetFormInputHidden(),
      'nu_seq_transf_et'   => new sfWidgetFormInputHidden(),
      'tp_transf_et'       => new sfWidgetFormInputHidden(),
      'nu_banco_ori_et'    => new sfWidgetFormInputHidden(),
      'nu_agencia_ori_et'  => new sfWidgetFormInputHidden(),
      'nu_conta_ori_et'    => new sfWidgetFormInputHidden(),
      'nu_doc_banc_et'     => new sfWidgetFormInputHidden(),
      'nu_banco_dest_et'   => new sfWidgetFormInputText(),
      'nu_agencia_dest_et' => new sfWidgetFormInputText(),
      'nu_conta_dest_et'   => new sfWidgetFormInputText(),
      'vl_valor_et'        => new sfWidgetFormInputText(),
      'de_motivo_et'       => new sfWidgetFormInputText(),
      'tp_doc_bancaixa_et' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'cd_municipio', 'required' => false)),
      'dt_transf_et'       => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'dt_transf_et', 'required' => false)),
      'nu_seq_transf_et'   => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'nu_seq_transf_et', 'required' => false)),
      'tp_transf_et'       => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'tp_transf_et', 'required' => false)),
      'nu_banco_ori_et'    => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'nu_banco_ori_et', 'required' => false)),
      'nu_agencia_ori_et'  => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'nu_agencia_ori_et', 'required' => false)),
      'nu_conta_ori_et'    => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'nu_conta_ori_et', 'required' => false)),
      'nu_doc_banc_et'     => new sfValidatorPropelChoice(array('model' => 'EstornosTransfFinan', 'column' => 'nu_doc_banc_et', 'required' => false)),
      'nu_banco_dest_et'   => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_dest_et' => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_dest_et'   => new sfValidatorString(array('max_length' => 10)),
      'vl_valor_et'        => new sfValidatorNumber(),
      'de_motivo_et'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tp_doc_bancaixa_et' => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estornos_transf_finan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstornosTransfFinan';
  }


}
