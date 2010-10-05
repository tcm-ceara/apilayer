<?php

/**
 * TaloesReceitas form base class.
 *
 * @method TaloesReceitas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTaloesReceitasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'               => new sfWidgetFormInputHidden(),
      'dt_versao_orc'              => new sfWidgetFormInputHidden(),
      'cd_orgao'                   => new sfWidgetFormInputHidden(),
      'cd_unid_orc'                => new sfWidgetFormInputHidden(),
      'cd_rubrica_or'              => new sfWidgetFormInputHidden(),
      'nu_talao_receita'           => new sfWidgetFormInputHidden(),
      'dt_talao_receita'           => new sfWidgetFormInputHidden(),
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
    ));

    $this->setValidators(array(
      'cd_municipio'               => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'              => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                   => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'                => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_rubrica_or'              => new sfValidatorPropelChoice(array('model' => 'OrcRecCatEco', 'column' => 'cd_rubrica_or', 'required' => false)),
      'nu_talao_receita'           => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'nu_talao_receita', 'required' => false)),
      'dt_talao_receita'           => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'dt_talao_receita', 'required' => false)),
      'dt_ref_tr'                  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'st_talao_tr'                => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'vl_receita_tr'              => new sfValidatorNumber(array('required' => false)),
      'de_hist_receita_tr'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tp_doc_contrib_tr'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nu_doc_contrib_tr'          => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nm_razao_social_contrib_tr' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'nu_banco_tr'                => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'nu_agencia_bancaria_tr'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nu_conta_corrente_tr'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_doc_credito_tr'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'dt_credito_tr'              => new sfValidatorDateTime(array('required' => false)),
      'tp_doc_credito_tr'          => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('taloes_receitas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaloesReceitas';
  }


}
