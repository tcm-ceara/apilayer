<?php

/**
 * TaloesExtrasDel form base class.
 *
 * @method TaloesExtrasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTaloesExtrasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'               => new sfWidgetFormInputText(),
      'dt_versao_orc'              => new sfWidgetFormInputText(),
      'cd_orgao'                   => new sfWidgetFormInputText(),
      'cd_unid_orc'                => new sfWidgetFormInputText(),
      'cd_conta_ctx'               => new sfWidgetFormInputText(),
      'nu_talao_receita_tx'        => new sfWidgetFormInputText(),
      'dt_talao_receita_tx'        => new sfWidgetFormDateTime(),
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
      'id'                         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'               => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                   => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'                => new sfValidatorString(array('max_length' => 4)),
      'cd_conta_ctx'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_talao_receita_tx'        => new sfValidatorString(array('max_length' => 8)),
      'dt_talao_receita_tx'        => new sfValidatorDateTime(),
      'dt_ref_tx'                  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'st_talao_tx'                => new sfValidatorString(array('max_length' => 2)),
      'vl_receita_tx'              => new sfValidatorNumber(),
      'de_hist_receita_tx'         => new sfValidatorString(array('max_length' => 255)),
      'tp_doc_contrib_tx'          => new sfValidatorString(array('max_length' => 1)),
      'nu_doc_contrib_tx'          => new sfValidatorString(array('max_length' => 25)),
      'nm_razao_social_contrib_tx' => new sfValidatorString(array('max_length' => 60)),
      'nu_banco_tx'                => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_bancaria_tx'     => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_corrente_tx'       => new sfValidatorString(array('max_length' => 10)),
      'nu_doc_credito_tx'          => new sfValidatorString(array('max_length' => 20)),
      'dt_credito_tx'              => new sfValidatorDateTime(),
      'tp_doc_credito_tx'          => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'id'                         => new sfValidatorPropelChoice(array('model' => 'TaloesExtrasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('taloes_extras_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaloesExtrasDel';
  }


}
