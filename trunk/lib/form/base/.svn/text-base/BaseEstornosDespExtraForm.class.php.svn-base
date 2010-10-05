<?php

/**
 * EstornosDespExtra form base class.
 *
 * @method EstornosDespExtra getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstornosDespExtraForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputHidden(),
      'dt_versao_orc'        => new sfWidgetFormInputHidden(),
      'cd_orgao'             => new sfWidgetFormInputHidden(),
      'cd_unid_orc'          => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'         => new sfWidgetFormInputHidden(),
      'nu_banco_cb'          => new sfWidgetFormInputHidden(),
      'nu_agencia_cb'        => new sfWidgetFormInputHidden(),
      'nu_conta_corrente_cb' => new sfWidgetFormInputHidden(),
      'nu_docdesp_xd'        => new sfWidgetFormInputHidden(),
      'dt_anulacao_xe'       => new sfWidgetFormDateTime(),
      'dt_ref_xe'            => new sfWidgetFormInputText(),
      'nm_assessor_xe'       => new sfWidgetFormInputText(),
      'de_justificativa_xe'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'         => new sfValidatorPropelChoice(array('model' => 'EstornosDespExtra', 'column' => 'cd_conta_ctx', 'required' => false)),
      'nu_banco_cb'          => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_banco_cb', 'required' => false)),
      'nu_agencia_cb'        => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_agencia_cb', 'required' => false)),
      'nu_conta_corrente_cb' => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_conta_corrente_cb', 'required' => false)),
      'nu_docdesp_xd'        => new sfValidatorPropelChoice(array('model' => 'DespesasExtraOrc', 'column' => 'nu_docdesp_xd', 'required' => false)),
      'dt_anulacao_xe'       => new sfValidatorDateTime(),
      'dt_ref_xe'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_assessor_xe'       => new sfValidatorString(array('max_length' => 40)),
      'de_justificativa_xe'  => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('estornos_desp_extra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstornosDespExtra';
  }


}
