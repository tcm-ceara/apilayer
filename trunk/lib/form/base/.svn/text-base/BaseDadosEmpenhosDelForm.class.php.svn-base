<?php

/**
 * DadosEmpenhosDel form base class.
 *
 * @method DadosEmpenhosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosEmpenhosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'dt_emissao_ne'          => new sfWidgetFormDateTime(),
      'nu_nota_empenho'        => new sfWidgetFormInputText(),
      'cd_cpf_gestor'          => new sfWidgetFormInputText(),
      'dt_contrato'            => new sfWidgetFormDateTime(),
      'nu_contrato'            => new sfWidgetFormInputText(),
      'dt_realizacao_licit_li' => new sfWidgetFormDateTime(),
      'nu_licitacao_li'        => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'          => new sfValidatorDateTime(),
      'nu_nota_empenho'        => new sfValidatorString(array('max_length' => 8)),
      'cd_cpf_gestor'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_contrato'            => new sfValidatorDateTime(array('required' => false)),
      'nu_contrato'            => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'dt_realizacao_licit_li' => new sfValidatorDateTime(array('required' => false)),
      'nu_licitacao_li'        => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'DadosEmpenhosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_empenhos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosEmpenhosDel';
  }


}
