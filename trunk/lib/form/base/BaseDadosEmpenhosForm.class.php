<?php

/**
 * DadosEmpenhos form base class.
 *
 * @method DadosEmpenhos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosEmpenhosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'          => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'        => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'          => new sfWidgetFormPropelChoice(array('model' => 'Contratos', 'add_empty' => true)),
      'dt_contrato'            => new sfWidgetFormPropelChoice(array('model' => 'Contratos', 'add_empty' => true)),
      'nu_contrato'            => new sfWidgetFormPropelChoice(array('model' => 'Contratos', 'add_empty' => true)),
      'dt_realizacao_licit_li' => new sfWidgetFormPropelChoice(array('model' => 'Licitacoes', 'add_empty' => true)),
      'nu_licitacao_li'        => new sfWidgetFormPropelChoice(array('model' => 'Licitacoes', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'cd_cpf_gestor'          => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_contrato'            => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'dt_contrato', 'required' => false)),
      'nu_contrato'            => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'nu_contrato', 'required' => false)),
      'dt_realizacao_licit_li' => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'dt_realizacao_licit_li', 'required' => false)),
      'nu_licitacao_li'        => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'nu_licitacao_li', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_empenhos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosEmpenhos';
  }


}
