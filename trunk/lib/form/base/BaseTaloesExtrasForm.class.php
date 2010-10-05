<?php

/**
 * TaloesExtras form base class.
 *
 * @method TaloesExtras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTaloesExtrasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'               => new sfWidgetFormInputHidden(),
      'dt_versao_orc'              => new sfWidgetFormInputHidden(),
      'cd_orgao'                   => new sfWidgetFormInputHidden(),
      'cd_unid_orc'                => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'               => new sfWidgetFormInputHidden(),
      'nu_talao_receita_tx'        => new sfWidgetFormInputHidden(),
      'dt_talao_receita_tx'        => new sfWidgetFormInputHidden(),
      'dt_ref_tx'                  => new sfWidgetFormInputText(),
      'st_talao_tx'                => new sfWidgetFormInputText(),
      'vl_receita_tx'              => new sfWidgetFormInputText(),
      'de_hist_receita_tx'         => new sfWidgetFormInputText(),
      'tp_doc_contrib_tx'          => new sfWidgetFormInputText(),
      'nu_doc_contrib_tx'          => new sfWidgetFormInputText(),
      'nm_razao_social_contrib_tx' => new sfWidgetFormInputText(),
      'nu_banco_tx'                => new sfWidgetFormInputText(),
      'nu_agencia_bancaria_tx'     => new sfWidgetFormInputText(),
      'nu_conta_corrente_tx'       => new sfWidgetFormInputText(),
      'nu_doc_credito_tx'          => new sfWidgetFormInputText(),
      'dt_credito_tx'              => new sfWidgetFormDateTime(),
      'tp_doc_credito_tx'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'               => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'              => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                   => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'                => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'               => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'nu_talao_receita_tx'        => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'nu_talao_receita_tx', 'required' => false)),
      'dt_talao_receita_tx'        => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'dt_talao_receita_tx', 'required' => false)),
      'dt_ref_tx'                  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'st_talao_tx'                => new sfValidatorString(array('max_length' => 2)),
      'vl_receita_tx'              => new sfValidatorNumber(),
      'de_hist_receita_tx'         => new sfValidatorString(array('max_length' => 255)),
      'tp_doc_contrib_tx'          => new sfValidatorString(array('max_length' => 1)),
      'nu_doc_contrib_tx'          => new sfValidatorString(array('max_length' => 25)),
      'nm_razao_social_contrib_tx' => new sfValidatorString(array('max_length' => 60)),
      'nu_banco_tx'                => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_bancaria_tx'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nu_conta_corrente_tx'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_doc_credito_tx'          => new sfValidatorString(array('max_length' => 20)),
      'dt_credito_tx'              => new sfValidatorDateTime(),
      'tp_doc_credito_tx'          => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
    ));

    $this->widgetSchema->setNameFormat('taloes_extras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaloesExtras';
  }


}
