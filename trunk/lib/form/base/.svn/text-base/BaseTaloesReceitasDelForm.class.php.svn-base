<?php

/**
 * TaloesReceitasDel form base class.
 *
 * @method TaloesReceitasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTaloesReceitasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'               => new sfWidgetFormInputText(),
      'dt_versao_orc'              => new sfWidgetFormInputText(),
      'cd_orgao'                   => new sfWidgetFormInputText(),
      'cd_unid_orc'                => new sfWidgetFormInputText(),
      'cd_rubrica_or'              => new sfWidgetFormInputText(),
      'nu_talao_receita'           => new sfWidgetFormInputText(),
      'dt_talao_receita'           => new sfWidgetFormDateTime(),
      'dt_ref_tr'                  => new sfWidgetFormInputText(),
      'st_talao_tr'                => new sfWidgetFormInputText(),
      'vl_receita_tr'              => new sfWidgetFormInputText(),
      'de_hist_receita_tr'         => new sfWidgetFormInputText(),
      'tp_doc_contrib_tr'          => new sfWidgetFormInputText(),
      'nu_doc_contrib_tr'          => new sfWidgetFormInputText(),
      'nm_razao_social_contrib_tr' => new sfWidgetFormInputText(),
      'nu_banco_tr'                => new sfWidgetFormInputText(),
      'nu_agencia_bancaria_tr'     => new sfWidgetFormInputText(),
      'nu_conta_corrente_tr'       => new sfWidgetFormInputText(),
      'nu_doc_credito_tr'          => new sfWidgetFormInputText(),
      'dt_credito_tr'              => new sfWidgetFormDateTime(),
      'tp_doc_credito_tr'          => new sfWidgetFormInputText(),
      'id'                         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'               => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                   => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'                => new sfValidatorString(array('max_length' => 4)),
      'cd_rubrica_or'              => new sfValidatorString(array('max_length' => 12)),
      'nu_talao_receita'           => new sfValidatorString(array('max_length' => 8)),
      'dt_talao_receita'           => new sfValidatorDateTime(),
      'dt_ref_tr'                  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'st_talao_tr'                => new sfValidatorString(array('max_length' => 2)),
      'vl_receita_tr'              => new sfValidatorNumber(),
      'de_hist_receita_tr'         => new sfValidatorString(array('max_length' => 255)),
      'tp_doc_contrib_tr'          => new sfValidatorString(array('max_length' => 1)),
      'nu_doc_contrib_tr'          => new sfValidatorString(array('max_length' => 25)),
      'nm_razao_social_contrib_tr' => new sfValidatorString(array('max_length' => 60)),
      'nu_banco_tr'                => new sfValidatorString(array('max_length' => 4)),
      'nu_agencia_bancaria_tr'     => new sfValidatorString(array('max_length' => 6)),
      'nu_conta_corrente_tr'       => new sfValidatorString(array('max_length' => 10)),
      'nu_doc_credito_tr'          => new sfValidatorString(array('max_length' => 20)),
      'dt_credito_tr'              => new sfValidatorDateTime(),
      'tp_doc_credito_tr'          => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'id'                         => new sfValidatorPropelChoice(array('model' => 'TaloesReceitasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('taloes_receitas_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaloesReceitasDel';
  }


}
