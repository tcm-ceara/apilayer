<?php

/**
 * DeducoesNotasPagas form base class.
 *
 * @method DeducoesNotasPagas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDeducoesNotasPagasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputHidden(),
      'dt_versao_orc'        => new sfWidgetFormInputHidden(),
      'cd_orgao'             => new sfWidgetFormInputHidden(),
      'cd_unid_orc'          => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'        => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'      => new sfWidgetFormInputHidden(),
      'nu_sub_empenho_np'    => new sfWidgetFormInputHidden(),
      'nu_nota_np'           => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'         => new sfWidgetFormInputHidden(),
      'dt_ref_doc_dnp'       => new sfWidgetFormInputText(),
      'vl_deducao_dnp'       => new sfWidgetFormInputText(),
      'tp_classificacao_dnp' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'        => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'             => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'          => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'        => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'      => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_sub_empenho_np'    => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_sub_empenho_np', 'required' => false)),
      'nu_nota_np'           => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_np', 'required' => false)),
      'cd_conta_ctx'         => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'dt_ref_doc_dnp'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_deducao_dnp'       => new sfValidatorNumber(),
      'tp_classificacao_dnp' => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('deducoes_notas_pagas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DeducoesNotasPagas';
  }


}
