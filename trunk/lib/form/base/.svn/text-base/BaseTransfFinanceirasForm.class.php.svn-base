<?php

/**
 * TransfFinanceiras form base class.
 *
 * @method TransfFinanceiras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTransfFinanceirasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputHidden(),
      'dt_transf_tf'       => new sfWidgetFormInputHidden(),
      'nu_seq_transf_tf'   => new sfWidgetFormInputHidden(),
      'tp_transf_tf'       => new sfWidgetFormInputText(),
      'nu_banco_ori_tf'    => new sfWidgetFormInputText(),
      'nu_agencia_ori_tf'  => new sfWidgetFormInputText(),
      'nu_conta_ori_tf'    => new sfWidgetFormInputText(),
      'nu_docbanc_tf'      => new sfWidgetFormInputText(),
      'nu_banco_dest_tf'   => new sfWidgetFormInputText(),
      'nu_agencia_dest_tf' => new sfWidgetFormInputText(),
      'nu_conta_dest_tf'   => new sfWidgetFormInputText(),
      'vl_valor_tf'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorPropelChoice(array('model' => 'TransfFinanceiras', 'column' => 'cd_municipio', 'required' => false)),
      'dt_transf_tf'       => new sfValidatorPropelChoice(array('model' => 'TransfFinanceiras', 'column' => 'dt_transf_tf', 'required' => false)),
      'nu_seq_transf_tf'   => new sfValidatorPropelChoice(array('model' => 'TransfFinanceiras', 'column' => 'nu_seq_transf_tf', 'required' => false)),
      'tp_transf_tf'       => new sfValidatorString(array('max_length' => 1)),
      'nu_banco_ori_tf'    => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_ori_tf'  => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_ori_tf'    => new sfValidatorString(array('max_length' => 10)),
      'nu_docbanc_tf'      => new sfValidatorString(array('max_length' => 10)),
      'nu_banco_dest_tf'   => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_dest_tf' => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_dest_tf'   => new sfValidatorString(array('max_length' => 10)),
      'vl_valor_tf'        => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('transf_financeiras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TransfFinanceiras';
  }


}
